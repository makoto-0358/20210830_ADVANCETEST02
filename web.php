<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class,'index']);
Route::post('/confirm', [ContactController::class,'create']);
Route::post('/thanks', [ContactController::class,'thanks']);

Route::get('/manegement', [ContactController::class,'manegement']);
Route::post('/find', [ContactController::class,'find']);
Route::post('/delete', [ContactController::class,'delete']);