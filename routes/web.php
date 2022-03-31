<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieController;


use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[MovieController::class,'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::resource('movie', MovieController::class);
Route::resource('user', UserController::class);

Route::get('/formLogin', function () {
    return view('/auth/formLogin');
});

Route::get('/faqs', function(){
    return view('FAQ');
});

Route::get('/knowUs', function(){
    return view('knowUs');
});

Route::post('/addToFavorites',[MovieController::class, 'addToFavorites'])->name('addToFavorites');
Route::get('/emptyFavorites',[MovieController::class, 'emptyFavorites'])->name('emptyFavorites');

Route::get('/favorites', function(){
    return view('favorites');
});

/**
Admin Routes


/admin/list-users
/admin/list/ 
/admin/information-user
//admin/authorization
/admin/insert
/admin/modify



*/