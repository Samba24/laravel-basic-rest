<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RandomController;

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
/*
    Api routes not secured
    Auth middlewares should be added next
*/
Route::get('/randoms', 'RandomController@index');
Route::post('/random/add','RandomController@store');

