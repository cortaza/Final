<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RedTematica;
use DB;

class FormredController extends Controller
{
    public function form(){        
        $redtematica=RedTematica::all();       
        return view('red/form', ['redtematica'=>$redtematica]);
    }

    /*DELETE 1*/
    public function create(){        
        $redtematica=RedTematica::all(); 
        return view('red/createred', ['redtematica'=>$redtematica]);
    }

    public function destroy($deleteprogram){                     
        DB::delete('DELETE FROM red_tematicas WHERE Codigo_red = ?', [$deleteprogram]);          
            return redirect()->route('red/formred');                
    }
    /*CREATE 2*/
    public function createprogram(Request $request){
        $redtematica=new RedTematica;
        $redtematica->Codigo_red=$request->Codigo_red;
        $redtematica->Nombre=$request->Nombre;        
        $redtematica->save();
        return redirect()->route('red/form');
    }  

    /*EDIT 1*/
    public function view(RedTematica $redtematica){               
        return view('red/edit', compact('redtematica'));   
    }

    public function updateprogram(Request $request, RedTematica $redtematica){                 
        $redtematica->Codigo_prog=$request->code;
        $redtematica->Nombre=$request->name;        
        $redtematica->save();        
         return redirect()->route('red/form');
    }   
}
