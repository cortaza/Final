<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaTematica;
use DB;

class FormareaController extends Controller
{
    public function formarea(){        
        $areatematica=AreaTematica::all();       
        return view('area/form', ['areastematica'=>$areatematica]);
    }

    /*DELETE 1*/
    public function createarea(){        
        $areatematica=AreaTematica::all(); 
        return view('area/createarea', ['areastematica'=>$areatematica]);
    }

    public function destroy($deleteprogram){                     
        DB::delete('DELETE FROM area_tematicas WHERE Codigo_red = ?', [$deleteprogram]);          
            return redirect()->route('area/form');                
    }
    /*CREATE 2*/
    public function createareaaction(Request $request){
        $areatematica=new AreaTematica;
        $areatematica->Codigo_area=$request->Codigo_area;
        $areatematica->Nombre=$request->Nombre;        
        $areatematica->Codigo_red=$request->Codigo_red;     
        $areatematica->save();
        return redirect()->route('area/form');
    }  

    /*EDIT 1*/
    public function viewarea(AreaTematica $areaTematica){               
        return view('area/edit', compact('areaTematica'));   
    }

    public function updateprogramarea(Request $request, AreaTematica $areatematica){                 
        $areatematica->Codigo_area=$request->Codigo_area;
        $areatematica->Nombre=$request->Nombre;        
        $areatematica->Codigo_red=$request->Codigo_red;       
        $areatematica->save();        
         return redirect()->route('area/form');
    }   
}
