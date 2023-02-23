<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SiginController;
use App\Http\Controllers\FormredController;
use App\Http\Controllers\FormareaController;
use App\Http\Controllers\InstructorController;

/*PAGINA INICIAL*/
Route::get('/', function () {return view('index');});

/*Login*/
Route::controller(SiginController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::get('/signup','signup')->name('signup');    
});



/*PROGRAMA*/

Route::controller(FormController::class)->group(function(){
    /*PROGRAM FORM*/    
    Route::get('/forms/program','form')->name('form');
    /*DELETE */
    Route::delete('/delete/{deleteprogram}','destroy')->name('programs.destroy');    
    //create
    Route::get('/forms/program/create','create')->name('create');
    Route::post('/forms/createprogram','createprogram')->name('createProgram');        
    //EDIT
    Route::get('forms/edit/{program}','view')->name('edit.prog');
    Route::put('forms/updateprogram/{program}','updateprogram')->name('updateprogram');
});




/*RED*/

Route::controller(FormredController::class)->group(function(){
    /*PROGRAM FORM*/    
    Route::get('/forms/red','form')->name('redform');
    /*DELETE */
    Route::delete('/deletered/{deletered}','destroy')->name('red.destroyred');    
    //create
    Route::get('/forms/red/create','create')->name('createred');
    Route::post('/forms/createred','createred')->name('createtered');        
    //EDIT
    Route::get('forms/editred/{red}','view')->name('edit.redt');
    Route::put('forms/updatered/{red}','updatered')->name('updatered');
});


/*AREA*/

Route::controller(FormareaController::class)->group(function(){
    /*AREA FORM*/    
    Route::get('/forms/area','formarea')->name('areaform');
    /*DELETE */
    Route::delete('/area/delete/{deletearea}','destroy')->name('area.destroy');    
    //create
    Route::get('/forms/area/createarea','create')->name('createarea');
    Route::post('/forms/createarea','createarea')->name('createarea');        
    //EDIT
    Route::get('forms/area/{area}','view')->name('area.edit');
    Route::put('forms/updatearea/{area}','updatearea')->name('updatearea');
});


/*INSTRUCTOR*/

Route::controller(InstructorController::class)->group(function(){
    /*PROGRAM FORM*/    
    Route::get('/forms/instructor','formin')->name('instrucform');
    /*DELETE */
    Route::delete('/instructor/delete/{deleteinstructor}','destroy')->name('instructor.destroy');    
    //create
    Route::get('/forms/instructor/create','create')->name('create');
    Route::post('/forms/createinstructor','createinstructor')->name('createinstructor');
    //EDIT
    Route::get('forms/instructor/{instructor}','view')->name('instructor.edit');
    Route::put('forms/updateinstructor/{instructor}','updateinstructor')->name('updateinstructor');
});