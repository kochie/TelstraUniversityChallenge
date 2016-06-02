<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use App\Task;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function(){
    return view('map');
});

Route::get('/maptest', function(){
    return view('maptest');
});

Route::get('/about', function(){
    return view('about');
});


Route::get('/list', function(){
    return view('list');
});

Route::resource('bins','BinsController');


/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete Task
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});

Route::auth();

Route::get('/home', 'HomeController@index');
