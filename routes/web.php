<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use \App\Http\Controllers\ViewController;
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

// Route::get('/hello', '\App\Http\Controllers\HelloController@index');
// Route::get('/hello', [HelloController::class, 'index']);

Route::get('/hello', 'HelloController@index');
Route::get('/hello/view', 'HelloController@view');
Route::get('/hello/list', 'HelloController@list');

Route::get('/view/escape', 'ViewController@escape');
Route::get('/view/if', 'ViewController@if');
Route::get('/view/isset', 'ViewController@isset');
Route::get('/view/switch', 'ViewController@switch');
Route::get('/view/foreach', 'ViewController@foreach_assoc');
Route::get('/view/style', 'ViewController@style_class');
Route::get('/view/check', 'ViewController@checked');