<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
            'first_name'=>['required'],
            'last_name'=>['required'],
            'phone_number'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        $User = User::create($request->all());

        // [
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'phone_number' => $request->phone_number,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'adresse'=> $request->adresse,
        //     'birthday'=>$request->birthday
        //     ]
        return redirect('/login');
        
    }
}

