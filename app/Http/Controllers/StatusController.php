<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
     public function add(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $status = Status::create([
            'name' => $request->name
        ]);
        return redirect()->route('status.list');
     }   

     public function showlist(){
        $statuses = Status::all();
        return view('statut.list', ['statuses' => $statuses]);
     }

     public function update(Request $request, $id)
     {
         $status = Status::findOrFail($id);
     
         $request->validate([
             'name' => 'required|string|max:255',
         ]);
     
         $status->update([
             'name' => $request->name,
         ]);
     
         return redirect()->back()->with('success', 'Status updated successfully.');
     }

     public function destroy($id){
        $status = Status::findOrFail($id);
        $status->delete();
        return redirect()->back()->with('success', 'Status deleted successfully.');
     }
}