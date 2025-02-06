<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

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
 
}

