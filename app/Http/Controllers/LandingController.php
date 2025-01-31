<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class LandingController extends BaseController
{

    public function showlist(){
        $cities = City::all();
        return view('welcome',['cts'=> $cities ]);
     }  
}
