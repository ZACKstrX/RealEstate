<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use App\Models\City;
use App\Models\Status;
use App\Models\TypeBien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    public function create()
    {
        // Fetching cities, statuses, and types from the database
        $cities = City::all();
        $statuses = Status::all();
        $types = TypeBien::all();

        // Passing the data to the view
        return view('products.form', compact('cities', 'statuses', 'types'));
    }
}
