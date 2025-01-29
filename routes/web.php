<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BienController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TypeBienController;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
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


Route::get('login',function(){
    return view('SignIn');
});

Route::get('logout',function(){
    Auth::logout();
    return redirect("/login");
});



route::get('Menu',function(){
    return view('Menu');
});

route::post('signup',[AuthManager::class,'signup']);



route::post('login',[AuthManager::class,'login']);

 Route::middleware('auth')->group(function(){

    route::get('Dash', function(){
        return view('type.list');
    });
    
    
    // dash routes : 
    Route::get('/TypeList', [TypeBienController::class, 'showlist'])->name('type.list');
    
    route::get('CitiesList',[CityController::class, 'showlist'])->name('cities.list');
    
    //Statut routes
    Route::get('/StatutList', [StatusController::class, 'showlist'])->name('status.list');
    
    //Products routes
    route::get('ProductsList',function(){
        return view('products.list');
        
    });
    
    Route::get('productform', [BienController::class, 'create']);
    
 });

//  Route::get('/productform', function () {
//     if (auth()->check()) {
//         return view('products.form');
//     } else {
//         return redirect()->route('login');  
//     }
// })->name('product.form');


// ----------------------------------------------------
//city crud routes :
route::post('/addcity',[CityController::class,'add']);
Route::post('/updatecity/{id}', [CityController::class, 'update'])->name('city.update');
Route::delete('/deletecity/{id}', [CityController::class, 'destroy'])->name('city.destroy');

// Status CRUD Routes
Route::post('/addstatus', [StatusController::class, 'add'])->name('status.add');
Route::post('/updatestatus/{id}', [StatusController::class, 'update'])->name('status.update');
Route::delete('/deletestatus/{id}', [StatusController::class, 'destroy'])->name('status.destroy');


// Type CRUD Routes
Route::get('/typelist', [TypeBienController::class, 'showlist'])->name('type.list');
Route::post('/addtype', [TypeBienController::class, 'add'])->name('type.add');
Route::post('/updatetype/{id}', [TypeBienController::class, 'update'])->name('type.update');
Route::delete('/deletetype/{id}', [TypeBienController::class, 'destroy'])->name('type.destroy');

