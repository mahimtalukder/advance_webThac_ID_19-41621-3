<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('indexPage');
});*/

Route::get('/',[PagesController::class, 'index']);

Route::get('/aboutMe',[PagesController::class, 'aboutMe']);

Route::get('/portfolio',[PagesController::class, 'portfolio']);

Route::get('/contact',[PagesController::class, 'contact']);
