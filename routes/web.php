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
    return view('type.list');
});


// dash routes : 
route::get('TypeList',function(){
    return view('type.list');
});


route::get('CitiesList',function(){
    return view('cities.list');
});


route::get('StatutList',function(){
    return view('statut.list');
});

//products routes
route::get('ProductsList',function(){
    return view('products.list');
    
});route::get('ProductsForm',function(){
    return view('products.form');
});


