<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        $cities = City::all();
        return view('cities.list',['cts'=> $cities ]);
     }
    
     public function update(Request $request, $id)
     {
         $city = City::findOrFail($id);
     
         $request->validate([
             'name' => 'required|string|max:255',
         ]);
     
         $city->update([
             'name' => $request->name,
         ]);
     
         return redirect()->back()->with('success', 'City updated successfully.');
     }
     public function destroy($id){
        $city = City::findOrfail($id);
        $city->delete();
        return redirect()->back()->with('success', 'City deleted successfully.');
     }
}
