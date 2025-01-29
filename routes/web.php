<?php

use App\Http\Controllers\AuthManager;
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
    route::get('TypeList',function(){
        return view('type.list');
    });
    
    
    route::get('CitiesList',function(){
        return view('cities.list');
    });
    
    //Statut routes
    route::get('StatutList',function(){
        return view('statut.list');
    });
    
    //Products routes
    route::get('ProductsList',function(){
        return view('products.list');
        
    });
    
    route::get('ProductsForm',function(){
        return view('products.form');
    });
    
 });

 Route::get('/productform', function () {
    if (auth()->check()) {
        return view('products.form');
    } else {
        return redirect()->route('login');  // Redirect to login if not authenticated
    }
})->name('product.form');