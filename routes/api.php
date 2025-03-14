<?php

use App\Models\Bien;
use App\Models\BienDetails;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test',function(){
// $data = Bien::with('user','city','typeBien','etat')
// ->get();

    // $data = User::with('biens')->get();
    $data = Bien::with('bienDetail')->get();
        // $data = BienDetails::with('bien')->get();

    return response()->json($data);
});