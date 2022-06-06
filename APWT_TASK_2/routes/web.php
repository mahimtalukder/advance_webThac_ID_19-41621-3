<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/employeeSignIn',[EmployeeController::class, 'employeeSignIn'])->name("employeeSignIn");
Route::post('/employeeSignIn',[EmployeeController::class, 'employeeSignInSubmitted'])->name("employeeSignInSubmitted");

Route::get('/employeeCreate',[EmployeeController::class, 'employeeCreate'])->name("employeeCreate");
Route::post('/employeeCreate',[EmployeeController::class, 'employeeCreateSubmitted'])->name('employeeCreate');
Route::get('/employeeCreateSuccess',[EmployeeController::class, 'employeeCreateSuccess'])->name("employeeCreateSuccess");
