<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\EmployeeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//public
Route::get('/',[PagesController::class, 'home'])->name("home");
Route::get('/aboutUs',[PagesController::class, 'aboutUs'])->name("aboutUs");

Route::get('/teams',[InformationController::class, 'teams'])->name("teams");
Route::get('/service',[InformationController::class, 'service'])->name("service");

Route::get('/contact',[ContactController::class, 'contact'])->name("contact");
Route::post('/contact',[ContactController::class, 'contactMessageSubmitted'])->name("contactMessageSubmitted");

//login
Route::get('/employeeSignIn',[EmployeeController::class, 'employeeSignIn'])->name("employeeSignIn");
Route::post('/employeeDashboard',[EmployeeController::class, 'employeeSignInSubmitted'])->name("employeeSignInSubmitted");
Route::get('/logout',[EmployeeController::class,'logout'])->name('employeeLogout');

//registration 
Route::get('/employeeCreate',[EmployeeController::class, 'employeeCreate'])->name("employeeCreate");
Route::post('/employeeCreate',[EmployeeController::class, 'employeeCreateSubmitted'])->name('employeeCreate');
Route::get('/employeeCreateSuccess',[EmployeeController::class, 'employeeCreateSuccess'])->name("employeeCreateSuccess");


Route::get('/employee/dash', [EmployeeController::class,'employeeDash'])
->name('employeeDash')->middleware('ValidedEmployee'); 


