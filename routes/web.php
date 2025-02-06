<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeBienController;
use App\Models\City;
use Illuminate\Auth\AuthManager as AuthAuthManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//---------------------------------------------------------------------------------------------------------------------------//


Route::get('/', [LandingController::class, 'showlist'])->name('landingpage');
route::get('Menu', function () {
    return view('Menu');
});
Route::get('SignUp', function () {
    return view('SignUp');
});
Route::get('login', [AuthManager::class, 'showLogin'])->name('login');
Route::get('logout', function () {
    Auth::logout();
    return redirect("/login");
});




route::post('signup', [AuthManager::class, 'signup']);
route::post('login', [AuthManager::class, 'login']);




Route::middleware('auth')->group(function () {        //middleware

    // dash routes : 

    // Type CRUD Routes
    Route::get('/TypeList', [TypeBienController::class, 'showlist'])->name('type.list');
    Route::post('/addtype', [TypeBienController::class, 'add'])->name('type.add');
    Route::post('/updatetype/{id}', [TypeBienController::class, 'update'])->name('type.update');
    Route::delete('/deletetype/{id}', [TypeBienController::class, 'destroy'])->name('type.destroy');
    //-------------------------------------------------


    //city crud routes :
    route::get('CitiesList', [CityController::class, 'showlist'])->name('cities.list');
    route::post('/addcity', [CityController::class, 'add']);
    Route::post('/updatecity/{id}', [CityController::class, 'update'])->name('city.update');
    Route::delete('/deletecity/{id}', [CityController::class, 'destroy'])->name('city.destroy');
    //-------------------------------------------------    

    // Status CRUD Routes
    Route::get('/StatutList', [StatusController::class, 'showlist'])->name('status.list');
    Route::post('/addstatus', [StatusController::class, 'add'])->name('status.add');
    Route::post('/updatestatus/{id}', [StatusController::class, 'update'])->name('status.update');
    Route::delete('/deletestatus/{id}', [StatusController::class, 'destroy'])->name('status.destroy');
    //----------------------------------------------------
    //Products routes
    route::get('ProductsList', [BienController::class, 'showlist'])->name('product.list');
    Route::get('productform', [BienController::class, 'come']);
    Route::post('productForm', [BienController::class, 'add']);
    Route::delete('deleteProduct/{id}',[BienController::class,'destroy'])->name('product.destroy');
    route::get('getupdate/{id}',[BienController::class, 'update'])->name('getupdate');
    route::post('updateProduct/{id}',[BienController::class, 'updateProduct'])->name('updateProduct');

});
// ----------------------------------------------------
