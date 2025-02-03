<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\BienDetails;
use App\Models\City;
use App\Models\Status;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BienController extends Controller
{
    public function come()
    {
        // Fetching cities, statuses, and types from the database
        $cities = City::all();
        $statuses = Status::all();
        $types = TypeBien::all();

        // Passing the data to the form
        return view('products.form', compact('cities', 'statuses', 'types'));
    }
    public function showlist(){
        $biens = Bien::all();
        // Passing the data to the list
        return view('products.list',['products'=>$biens]);
    }

    public function add(Request $request){ 
        // $request->validate([
        //     'title'=>'required',
        //     'description'=>'required',
        //     'phone_number'=>'required',
        //     'email'=>'required',
        //     'surface'=>'required',
        //     'prix'=>'required',
        //     'city_id'=>'required',
        //     'status_id'=>'required',
        // ]);

        $bienDetail = BienDetails::create([
            'rooms'=>$request->rooms,
            'baths'=>$request->baths,
            'garages'=>$request->garages,
            'balconies'=>$request->balconies,
        ]);

        $Bien = Bien::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'surface'=>$request->surface,
            'image'=>$request->image,
            'prix'=>$request->prix,
            'city_id'=>$request->city_id,
            'type_bien_id'=>$request->type_bien_id,
            'status_id'=>$request->status_id,
            'etat_id'=>$request->etat_id,
            'detail_id' =>  $bienDetail->id,
            'user_id' => auth()->id(),

        ]);

 

      

               // $DetailBien  = bienDetail::create([
        //     'email'=>$request->email,
        //     'surface'=>$request->surface,
        //     'image'=>$request->image,
        //     'prix'=>$request->prix,
        // ])
        return redirect()->route('landingpage');

    }
    public function destroy($id){
        $product = Bien::findOrfail($id);
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }
}