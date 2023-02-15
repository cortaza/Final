<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SiginController;
use App\Http\Controllers\FormredController;


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


/*PAGINA INICIAL*/
Route::get('/', function () {return view('index');});

/*Login*/

Route::get('/login', [SiginController::class,'login'])->name('login');
Route::get('/signup', [SiginController::class,'signup'])->name('signup');


/*////----------PROGRAM----------////*/
/*MAIN FORM*/
Route::get('/forms/program', [FormController::class,'form'])->name('form');

/*DELETE */
Route::delete('/delete/{deleteprogram}', [FormController::class,'destroy'])->name('programs.destroy');

//create
Route::get('/forms/program/create', [FormController::class,'create'])->name('create');
Route::post('/forms/createprogram', [FormController::class,'createprogram'])->name('createProgram');
//EDIT
Route::get('forms/edit/{program}', [FormController::class,'view'])->name('edit.prog');
Route::put('forms/updateprogram/{program}', [FormController::class,'updateprogram'])->name('updateprogram');

/*////----------RED----------////*/

Route::get('/forms/red', [FormredController::class,'form'])->name('redform');