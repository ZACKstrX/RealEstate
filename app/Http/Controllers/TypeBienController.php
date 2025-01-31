<?php

namespace App\Http\Controllers;

use App\Models\TypeBien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TypeBienController extends Controller
{
    public function showlist()
    {
        $types = TypeBien::all(); 
        return view('type.list', ['types' => $types]); 
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TypeBien::create([
            'name' => $request->name,
        ]);

        return redirect()->route('type.list')->with('success', 'Type added successfully.');
    }

    public function update(Request $request, $id)
    {
        $type = TypeBien::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $type->update([
            'name' => $request->name,
        ]);

        return redirect()->back()->with('success', 'Type updated successfully.');
    }

    public function destroy($id)
    {
        $type = TypeBien::findOrFail($id);
        $type->delete();

        return redirect()->back()->with('success', 'Type deleted successfully.');
    }
}
