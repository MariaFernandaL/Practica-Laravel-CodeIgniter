<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VideogameController;
use App\Models\Videogame;
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
    return view('layout');
});

Route::get('/videogames', [VideogameController::class,'index']);

Route::get('/videogames/create', [VideogameController::class, 'create'])->middleware('auth'); 

//Manage your videogames 
Route::get('/videogames/manage' , [VideogameController::class,'manage']);

//Store a videogame
Route::post('/videogames', [VideogameController::class, 'store'])->middleware('auth');

//Single VideoGame by id 
Route::get('/videogames/{videogame}',[VideogameController::class,'show']);

//Show videogame edit form
Route::get('/videogames/edit/{videogame}', [VideogameController::class, 'edit' ])->middleware('auth'); 

//Edit videogame put method
Route::put('/videogames/{videogame}', [VideogameController::class , 'update' ])->middleware('auth');

//Destroy a videogame

Route::delete('/videogames/{videogame}', [VideogameController::class, 'destroy'])->middleware('auth');

//Show  Register/Form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Show Login/Form

Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

//Auth user
Route::post('/users/auth',[UserController::class, 'auth']);

//Create new user

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']); 

// Common resources routes
// index - Show all items
// show - Show single item
// create - Show crate form
// store - Create new item
// edit - Edit item ( show form)
// update - Update item
// destroy - Delete item