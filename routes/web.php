<?php

use App\Http\Controllers\AddEfad;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeEfad;
use App\Http\Controllers\addController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AddbookController;
use App\Http\Controllers\RequestController;
use Symfony\Component\Routing\RequestContext;
use App\Http\Controllers\editEmployeeController;

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

Route::get('/',[adminController::class,'index']);

Route::get('login', [adminController::class, 'index'])->name('login');
Route::post('post-login', [adminController::class, 'postLogin'])->name('login.post');
Route::get('registration', [adminController::class, 'registration'])->name('register');
Route::post('post-registration', [adminController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [adminController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [adminController::class, 'logout'])->name('logout');

Route::get('/employee',[RequestController::class,'index'])->name('request.index');
Route::post('add-employee',[RequestController::class,'store']);
Route::get('edit-employee/{id}',[RequestController::class,'edit'])->name('editEmployee');
Route::post('edit',[RequestController::class,'update'])->name('updateEmployee');

Route::get('search',[RequestController::class,'search'])->name('request.search');

Route::get('book',[AddbookController::class,'test']);
Route::get('book/{id}',[AddbookController::class,'index'])->name('Book');
Route::post('add-book',[AddbookController::class,'store']);



Route::get('/export-employee',[RequestController::class,'exportEmployee'])->name('export');
Route::get('/export-employee/{id}',[RequestController::class,'exportSingle'])->name('exportbyid');


Route::get('/test',[EmployeeEfad::class,'test'])->name('test.index');
Route::get('EfadEmployee/{id}',[EmployeeEfad::class,'index'])->name('EfadEmployee');
Route::post('AddEfad',[EmployeeEfad::class,'create'])->name('AddEfad');
Route::get('getefad',[EmployeeEfad::class,'test'])->name('efad.search');


?>
