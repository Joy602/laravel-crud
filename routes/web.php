<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\myController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','insert');

Route::post('insertData',[myController::class, 'insert' ]);

Route::get('/read',[myController::class, 'readData']);

Route::view('/update','update');

Route::get('updateDelete',[myController::class, 'updateOrDelete']);

Route::get('updateData',[myController::class,'update']);