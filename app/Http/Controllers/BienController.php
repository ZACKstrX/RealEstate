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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'prix' => 'required|numeric|min:0',
            'surface' => 'required|numeric|min:0',
            'image' => 'nullable|image',  // Assuming image is optional, adjust accordingly
            'city_id' => 'required|exists:cities,id',
            'type_bien_id' => 'required|exists:type_biens,id',
            'status_id' => 'required|exists:statuses,id',
            'etat_id' => 'required|exists:etats,id',
        ]);
        if ($request->fails()) {
            return redirect()->back()->withErrors($validatedData)->withInput()->with('showModal', true);
        }
        
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
        return redirect()->route('landingpage');

    }


    public function destroy($id){
        $product = Bien::findOrfail($id);
        $product->delete();
        return redirect()->back()->with('success','Product deleted successfully');
    }

    public function update($id){
        $product = Bien::find($id);
        $bienDetails = $product->bienDetails;
        $cities = City::all();
        $statuses = Status::all();
        $types = TypeBien::all();
        if($product !=null){
            return view('products.update',[
                'previous'=>$product,
                'bienDetails'=>$product->bienDetail,
                'cities' => $cities,
                'statuses' => $statuses,
                'types' => $types
                ]  );
        }
    }
    public function updateProduct(Request $request,$id){
        $product = Bien::findOrfail($id);
        if($product){
            $request->validate([
                'title'=>'required',
                'phone_number'=>'required',
                'email'=>'required',
                'prix'=>'required',
            ]);
            $product->update($request->all());
            return redirect()->route('product.list');
        }
    }
}