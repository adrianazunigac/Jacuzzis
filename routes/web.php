<?php

use Illuminate\Support\Facades\Route;

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

//Login
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {

    //Home
    Route::get('/home', function () {
        return view('testhome');
    });

    // Usuarios
    Route::resource('usuarios', '\App\Http\Controllers\UserController');

});
