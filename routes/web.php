<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\managecontroller;

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

Route::get('/', [managecontroller::class,'index']);
Route::get('/login', [managecontroller::class,'main_management']);
Route::get('/leave', [managecontroller::class,'leave']);
Route::get('/keepvender', [managecontroller::class,'keepvender']);
