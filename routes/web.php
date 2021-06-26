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
    return view('welcome');
    
});


Route::get('/anasayfa/{dil}','App\Http\Controllers\Appe@index');
Route::get('/uye/{id}','App\Http\Controllers\Appe@uye');
//localhost:8000/uye/4 ile 4 nolu id deki uyeye ulastım