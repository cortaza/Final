<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaTematica;
use DB;

class FormareaController extends Controller
{
    public function form(){        
        $areatematica=AreaTematica::all();       
        return view('area/form', ['areastematica'=>$areatematica]);
    }

    /*DELETE 1*/
    public function create(){        
        $areatematica=AreaTematica::all(); 
        return view('area/createred', ['areastematica'=>$areatematica]);
    }

    public function destroy($deleteprogram){                     
        DB::delete('DELETE FROM area_tematicas WHERE Codigo_red = ?', [$deleteprogram]);          
            return redirect()->route('area/form');                
    }
    /*CREATE 2*/
    public function createprogram(Request $request){
        $areatematica=new AreaTematica;
        $areatematica->Codigo_area=$request->Codigo_area;
        $areatematica->Nombre=$request->Nombre;        
        $areatematica->Codigo_red=$request->Codigo_red;     
        $areatematica->save();
        return redirect()->route('area/form');
    }  

    /*EDIT 1*/
    public function view(AreaTematica $areaTematica){               
        return view('area/edit', compact('areatematica'));   
    }

    public function updateprogram(Request $request, AreaTematica $areatematica){                 
        $areatematica->Codigo_area=$request->Codigo_area;
        $areatematica->Nombre=$request->Nombre;        
        $areatematica->Codigo_red=$request->Codigo_red;       
        $areatematica->save();        
         return redirect()->route('area/form');
    }   
}
