<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;

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
Route::get('get-data', [admincontroller::class, 'getdata']);
Route::get('upload', [admincontroller::class, 'upload_display']);
Route::Post('add-profile', [admincontroller::class, 'add_profile']);
Route::get('display', [admincontroller::class, 'display']);
