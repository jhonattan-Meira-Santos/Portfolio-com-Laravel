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
use App\Http\Controllers\Site;
Route::get('/',[Site::class, 'index']);
Route::get('/index',[Site::class, 'index']);
Route::get('/home',[Site::class, 'index']);
Route::get('/new', [Site::class,'formulario']);
Route::get('/events/create', [Site::class,'store']);
Route::post('/events', [Site::class,'store']);
