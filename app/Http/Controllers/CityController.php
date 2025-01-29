<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
     public function add(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $City = City::create([
            'name' => $request->name
        ]);
        return redirect()->route('cities.list');
     }   
     public function showlist(){
        $cities =City::all();
        return view('cities.list',['cts'=> $cities ]);
     }

}
