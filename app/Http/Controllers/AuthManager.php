<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email' => ['required','email'],
            'password' =>['required']
        ]);

         if(!auth()->attempt($request->only('email','password'))){

            return redirect('/login');
        }

        return redirect('/ProductsList');

    }



    public function signup(Request $request){
        $request->validate([
            'first_name'=>['required',],
            'last_name'=>['required'],
            'phone_number'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $User = User::create([
        'first_name' => $request->firstname,
        'last_name' => $request->lastname,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'password' => $request->password,
        'adresse'=> $request->adresse,
        'birthday'=>$request->birthday
        ]);
        return redirect('/login');
        
    }
}

