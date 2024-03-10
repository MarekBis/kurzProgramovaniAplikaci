<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KontaktController;
use App\Http\Controllers\KoteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomepageController::class,'index'])->name("homepageRoute");

Route::get('/info',array(KontaktController::class,'index'))->name("kontaktRoute");

Route::get('/formular',array(KoteController::class,'index'))->name("formularRoute");


Route::post("/pridat-kote",array(KoteController::class,"zpracujFormular"));

Route::get("/kote/{id}", array(KoteController::class, "detail"));