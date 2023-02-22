<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SiginController;
use App\Http\Controllers\FormredController;
use App\Http\Controllers\FormareaController;

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
    Route::delete('/deletered/{deleteprogram}','destroy')->name('programs.destroy');    
    //create
    Route::get('/forms/program/createred','create')->name('create');
    Route::post('/forms/createprogram','createprogram')->name('createProgram');        
    //EDIT
    Route::get('forms/editred/{program}','view')->name('edit.prog');
    Route::put('forms/updateprogram/{program}','updateprogram')->name('updateprogram');
});

/*AREA*/

Route::controller(FormareaController::class)->group(function(){
    /*PROGRAM FORM*/    
    Route::get('/forms/area','form')->name('areaform');
    /*DELETE */
    Route::delete('/deletered/{deleteprogram}','destroy')->name('programs.destroy');    
    //create
    Route::get('/forms/program/createred','create')->name('create');
    Route::post('/forms/createprogram','createprogram')->name('createProgram');        
    //EDIT
    Route::get('forms/editred/{program}','view')->name('edit.prog');
    Route::put('forms/updateprogram/{program}','updateprogram')->name('updateprogram');
});
