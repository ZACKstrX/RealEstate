<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
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

        $imagePath = $user->image;
        if ($request->hasFile('profile_picture')) {
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('images/useless', 'public');
        }
    
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'addresse' => $request->addresse,
            'birthday' => $request->birthday,
            'bio' => $request->bio,
            'profile_picture'=>$imagePath
        ]);
        return redirect('/userinformation')->with('success', 'User updated successfully!');
    }
}

