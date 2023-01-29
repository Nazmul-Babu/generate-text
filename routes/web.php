<?php

use App\Http\Controllers\AiController;
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
Route::get('ai',[AiController::class,'index'])->name('textget');
Route::post('ai-3',[AiController::class,'text'])->name('aid');
Route::post('ai',[AiController::class,'textsave'])->name('aisave');
