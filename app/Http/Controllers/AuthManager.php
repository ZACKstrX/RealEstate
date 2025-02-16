<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthManager extends Controller
{
    public function showLogin(){
        return view('SignIn');
    }

    public function login(Request $request){

        $request->validate([
            'email' => ['required','email'],
            'password' =>['required']
        ]);

         if(Auth::attempt($request->only('email','password'))){    

             return redirect('/ProductsList');
        }
        
        return back()->withErrors([
            'email' => 'Invalid email or password.',
            'password' => 'Invalid email or password.',
        ])->withInput();

    }



    public function signup(Request $request){
        $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'phone_number'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $request['password'] = bcrypt($request->password);
        $User = User::create($request->all());

        return redirect('/login')->with('success', 'Account created successfully! Please log in.');
        
    }
    public function info(){
        return view('User.info');
    }
 
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validator = FacadesValidator::make($request->all(), [
        'first_name' => 'required',
        'last_name' => 'required',
        'phone_number'=>'required',
        'email'=>'required|email',
        'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = $user->profile_picture;
        if ($request->hasFile('profile_picture')) {
            if ($user->profile_picture) {
                Storage::disk('public')->delete($user->profile_picture);
            }
            $imagePath = $request->file('profile_picture')->store('profile_picture', 'public');
        }
    
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'birthday' => $request->birthday,
            'bio' => $request->bio,
            'profile_picture'=>$imagePath
        ]);
        return redirect('/userinformation')->with('success', 'User updated successfully!');
    }

    public function checkPassword(Request $request)
    {
        $user = Auth::user();

        if (Hash::check($request->password, $user->password)) {
            return response()->json(['valid' => true]);
        }

        return response()->json(['valid' => false]);
    }

    public function updatePassword(Request $request, $id)
    {
        $user = Auth::user();  // Retrieve the authenticated user
    
        // Validate new password and current password
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed', // The 'confirmed' rule expects a matching confirmation field
        ]);
    
        // Check if the current password matches the stored password
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['error' => 'Incorrect password']);
        }
    
        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();  // Save changes to the database
    
        return response()->json(['success' => true]);
    }
    
    

}

