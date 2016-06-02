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


use App\bin;
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

Route::get('/contact', function(){
    return view('contact');
});


Route::get('/list', function(){
    return redirect()->action('BinsController@index');
});

Route::resource('bins','BinsController');

Route::get('/excel', function(){
    $bin = bin::select('id', 'lat', 'lng', 'bin_id', 'time')->get();
    Excel::create('bins', function($excel) use($bin) {
        $excel->sheet('Bins', function($sheet) use($bin) {
            $sheet->fromArray($bin);
        });
    })->export('xls');
});





Route::auth();

Route::get('/home', 'HomeController@index');
