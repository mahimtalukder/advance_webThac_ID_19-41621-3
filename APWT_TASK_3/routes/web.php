<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdminController;

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

//public
Route::get('/',[PagesController::class, 'home'])->name("home");
Route::get('/aboutUs',[PagesController::class, 'aboutUs'])->name("aboutUs");

Route::get('/teams',[InformationController::class, 'teams'])->name("teams");
Route::get('/service',[InformationController::class, 'service'])->name("service");

Route::get('/contact',[ContactController::class, 'contact'])->name("contact");
Route::post('/contact',[ContactController::class, 'contactMessageSubmitted'])->name("contactMessageSubmitted");

//login
Route::get('/signIn',[MemberController::class, 'signIn'])->name("signIn");
Route::post('/signInSubmitted',[MemberController::class, 'signInSubmitted'])->name("signInSubmitted");
Route::get('/logout',[MemberController::class,'logout'])->name('logout');

//admin
Route::get('/admin/dash', [AdminController::class, 'dashboard'])
->name('adminDash')->middleware('validedAdmin'); 

Route::get('/admin/viewProfile', [AdminController::class, 'viewProfile'])
->name('adminViewProfile')->middleware('validedAdmin'); 

Route::get('/admin/editProfile', [AdminController::class, 'editProfile'])
->name('adminEditProfile')->middleware('validedAdmin'); 

Route::post('/admin/editProfile',[AdminController::class, 'editProfileSubmitted'])
->name('adminEditProfileSubmitted')->middleware('validedAdmin'); 


//registration 
Route::get('/employeeCreate',[EmployeeController::class, 'employeeCreate'])->name("employeeCreate");
Route::post('/employeeCreate',[EmployeeController::class, 'employeeCreateSubmitted'])->name('employeeCreate');
Route::get('/employeeCreateSuccess',[EmployeeController::class, 'employeeCreateSuccess'])->name("employeeCreateSuccess");

