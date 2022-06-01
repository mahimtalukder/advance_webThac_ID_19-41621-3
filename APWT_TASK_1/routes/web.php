<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InformationController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PagesController::class, 'home'])->name("home");
Route::get('/aboutUs',[PagesController::class, 'aboutUs'])->name("aboutUs");
Route::get('/contact',[PagesController::class, 'contact'])->name("contact");

Route::get('/teams',[InformationController::class, 'teams'])->name("teams");
Route::get('/service',[InformationController::class, 'service'])->name("service");
