<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HelloController;
use \App\Http\Controllers\ViewController;
use \App\Http\Controllers\CtrlController;
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

Route::controller(HelloController::class)->group(function(){
    Route::get('/hello', 'index');
    Route::get('/hello/view', 'view');
    Route::get('/hello/list', 'list')
        ->name('list');
});
// Route::get('/hello', 'HelloController@index');
// Route::get('/hello/view', 'HelloController@view');
// Route::get('/hello/list', 'HelloController@list');

Route::get('/view/escape', 'ViewController@escape');
Route::get('/view/if', 'ViewController@if');
Route::get('/view/isset', 'ViewController@isset');
Route::get('/view/switch', 'ViewController@switch');
Route::get('/view/foreach', 'ViewController@foreach_assoc');
Route::get('/view/style', 'ViewController@style_class');
Route::get('/view/check', 'ViewController@checked');
Route::get('/view/master', 'ViewController@master');
Route::get('/view/comp', 'ViewController@comp');

Route::get('/route/param/{id?}', 'RouteController@param')
    ->where(['id' => '[0-9]{2,3}']);

Route::get('/route/search/{keywd?}', 'RouteController@search')
    ->where('keywd', '.*');

Route::prefix('/members')->group(function(){
    Route::get('/info', 'RouteController@info');
    Route::get('/article', 'RouteController@article');
});

Route::namespace('Main')->group(function(){
    Route::get('/route/ns', 'RouteController@ns');
});

Route::get('/route/enum_param/{category}', 'RouteController@enum_param');

Route::redirect('/hoge', '/');

Route::controller(CtrlController::class)->group(function(){
    Route::get('/ctrl/outjson', 'outJson');
    Route::get('/ctrl/outfile', 'outFile');
    Route::get('/ctrl/outimage', 'outImage');
    Route::get('/ctrl/redirect', 'redirectBasic');
    Route::get('/ctrl/form', 'form');
    Route::post('/ctrl/result', 'result');
    Route::get('/ctrl/upload', 'upload');
    Route::post('/ctrl/uploadfile', 'uploadfile');
   
});




// Route::get('/ctrl/outjson', 'CtrlController@outJson');


