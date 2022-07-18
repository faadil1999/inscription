<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;

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
})->name('home');

Route::get('/inscription',[InscriptionController::class,'index_inscription'])->name('inscription');

Route::get('inscription/decision/{data}',[InscriptionController::class,'decision'])->name('decision');

Route::Post('inscription/confirm/{data}',[InscriptionController::class,'confirm_inscription'])->name('confirm_inscription');

Route::Post('inscription/no_confirm/{data}',[InscriptionController::class,'no_confirm_inscription'])->name('no_confirm_inscription');

Route::post("/inscription",[InscriptionController::class,'sendRequest'])->name('inscription_request');
