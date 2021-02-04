<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Autenticación
Route::group(['prefix' => 'auth' ], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('userinfo', 'App\Http\Controllers\AuthController@user_info');


    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('user', 'App\Http\Controllers\AuthController@user');
    });
});

//Recuperar contraseña
Route::post('forgot', 'App\Http\Controllers\UserController@forgot');

//Encuestas
Route::group(['prefix' => 'surveys' ], function () {
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/', 'App\Http\Controllers\SurveyController@index');
        Route::get('/{id}', 'App\Http\Controllers\SurveyController@show');
    });
});

//Preguntas
Route::group(['prefix' => 'question' ], function () {
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/', 'App\Http\Controllers\QuestionController@index');
        //Ver preguntas por encuesta
        Route::get('/survey/{id}', 'App\Http\Controllers\QuestionController@show');
    });
});

//Opciones de Respuesta
Route::group(['prefix' => 'answers' ], function () {
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::get('/', 'App\Http\Controllers\AnswerController@index');
        //Ver respuestas por preguntas
        Route::get('/question/{id}', 'App\Http\Controllers\AnswerController@show');
    });
});

//Respuesta de los usuarios
Route::group(['prefix' => 'useranswers' ], function () {
    Route::group(['middleware' => 'auth:sanctum'], function() {
        Route::post('/', 'App\Http\Controllers\UserAnswerController@store');
    });
});