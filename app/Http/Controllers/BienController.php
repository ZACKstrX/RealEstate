<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\BienDetails;
use App\Models\City;
use App\Models\Status;
use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class BienController extends Controller
{
    public function come()
    {
        $cities = City::all();
        $statuses = Status::all();
        $types = TypeBien::all();
    
        return view('products.form', compact('cities', 'statuses', 'types'));
    }
    public function showlist(){
        $biens = Bien::all();
        return view('products.list',['products'=>$biens]);
    }

    public function add(Request $request){ 
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'phone_number' => 'required|string|max:10',
        'email' => 'required|email|max:255',
        'prix' => 'required|numeric|min:0|max:9999999999',
        'surface' => 'required|numeric|min:0',
        'image' => 'nullable|image',  
        'city_id' => 'required|exists:cities,id',
        'type_bien_id' => 'required|exists:type_biens,id',
        'status_id' => 'required|exists:statuses,id',
        'etat_id' => 'required|exists:etats,id',
    ]);

    if ($validator->fails()) {
        session()->flash('showModal', true); 
        return redirect()->back()->withErrors($validator)->withInput();  
    }

    $bienDetail = BienDetails::create([
        'rooms'=>$request->rooms,
        'baths'=>$request->baths,
        'garages'=>$request->garages,
        'balconies'=>$request->balconies,
    ]);


    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images/useless', 'public');
    } 
    
    $imageUrl = asset('storage/' . $imagePath);

    $Bien = Bien::create([
        'title'=>$request->title,
        'description'=>$request->description,
        'phone_number'=>$request->phone_number,
        'email'=>$request->email,
        'surface'=>$request->surface,
        'image'=>$imagePath,
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
    public function updateProduct(Request $request, $id)
    {
        $product = Bien::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
            'email' => 'required|email|max:255',
            'prix' => 'required|numeric|min:0|max:9999999999',
            'surface' => 'required|numeric|min:0',
            'image' => 'nullable|image',
            'city_id' => 'required|exists:cities,id',
            'type_bien_id' => 'required|exists:type_biens,id',
            'status_id' => 'required|exists:statuses,id',
            'etat_id' => 'required|exists:etats,id',
        ]);
    
        if ($validator->fails()) {
            session()->flash('showModal', true);
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $imagePath = $product->image;
        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')
            ->store('images/useless', 'public');
        }
    
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'surface' => $request->surface,
            'prix' => $request->prix,
            'image' => $imagePath,
            'city_id' => $request->city_id,
            'type_bien_id' => $request->type_bien_id,
            'status_id' => $request->status_id,
            'etat_id' => $request->etat_id,
        ]);
    
        if ($product->detail_id) {
            $bienDetail = BienDetails::find($product->detail_id);
            if ($bienDetail) {
                $bienDetail->update([
                    'rooms' => $request->rooms,
                    'baths' => $request->baths,
                    'garages' => $request->garages,
                    'balconies' => $request->balconies,
                ]);
            }
        }
    
        return redirect()->route('product.list');
    }
    
}