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

Route::get('/', function () {
    return view('app');
});

//Voglio che ogni rotta mi rimandi alla pagina app, l'unica pagina che ci sarà
Route::any('/{any}', function (){
    return view('app');
})->where('any','.*');
