<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RedTematica;
use DB;

class FormredController extends Controller
{
    public function form(){        
        $redstematica=RedTematica::all();       
        return view('red/form', ['redstematica'=>$redstematica]);
    }


    /*DELETE 1*/
    public function destroy($deleteprogram){                     
        DB::delete('DELETE FROM red_tematicas WHERE Codigo_red = ?', [$deleteprogram]);          
            return redirect()->route('redform');                
    }
    

    /*CREATE 2*/

    public function create(){        
        $redtematica=RedTematica::all(); 
        return view('red/createred', ['redtematica'=>$redtematica]);
    }
    public function createred(Request $request){
        $redtematica=new RedTematica;
        $redtematica->Codigo_red=$request->Codigo_red;
        $redtematica->Nombre=$request->Nombre;        
        $redtematica->save();
        return redirect()->route('redform');
    }  


    /*EDIT 1*/
    public function view(RedTematica $red){    
        return view('red/edit', compact('red'));  
    }

    public function updatered(Request $request, RedTematica $red){                 
        $red->Codigo_red=$request->Codigo_red;
        $red->Nombre=$request->Nombre;        
        $red->save();        
         return redirect()->route('redform');
    }   
}
