<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('SignUp',function(){
    return view('SignUp');
});
Route::get('SignIn',function(){
    return view('SignIn');
});
route::get('Dash', function(){
    return view('Type');
});
// dash routes : 
route::get('Type',function(){
    return view('Type');
});
route::get('Cities',function(){
    return view('Cities');
});
route::get('Statut',function(){
    return view('Statut');
});
route::get('Products',function(){
    return view('Products');
});
 
 