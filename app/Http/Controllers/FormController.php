<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroFormacion;
use App\Models\Programa;
use App\Models\AreaTematica;
use DB;

class FormController extends Controller
{
    public function form(){        
        $programas=Programa::all();        
        return view('form', ['programas'=>$programas]);
    }

    /*CREATE 1*/
    public function create(){        
        $centro=CentroFormacion::all();
        $programas=Programa::all();      
        $area=AreaTematica::all();
        return view('create', ['programs'=>$programas,
                                'centros'=>$centro,
                            'areas'=>$area]);
    }

    public function destroy($deleteprogram){
        /*return $deleteprogram;*/
        /*
        $delete =Program::find($deleteprogram);
        $delete ->delete();
        return redirect()->route('form');*/        
             
        DB::delete('DELETE FROM programas WHERE Codigo_prog = ?', [$deleteprogram]);          
            return redirect()->route('form');        
        
    }
    /*CREATE 2*/
    public function createprogram(Request $request){
        $program=new Programa;
        $program->Codigo_prog=$request->code;
        $program->Nombre=$request->name;
        $program->Estado=$request->status;
        $program->Nivel_formacion=$request->level;
        $program->Duracion=$request->duration;
        $program->Version=$request->version;
        $program->Codigo_centro=$request->centro_codigo;
        $program->Codigo_area=$request->Codigo_area;
        $program->save();
        return redirect()->route('form');
    }  

    /*EDIT 1*/
    public function view(Programa $program){    
        // return $program;     
        return view('edit', compact('program'));
        /*$programs=Program::all();
        $programid=Program::select('codigo_prog')->where('codigo_prog',$program_code)->get();                                                
        $centro=Centro::all();
        return view('edit', ['programs'=>$programs,
            'programid'=>$programid,
                                'centros'=>$centro]);*/

        // $program=Program::where('codigo_prog',$program_code)->get();                                                
        // $name=Program::where('codigo_prog',$program_code)->get();                                                        
        // return view('edit', ['code'=>$program_code,
        //                       'program'=>$program,
        //                     'name'=>$name]);
    /*
        $programid=Program::select('codigo_prog')->where('codigo_prog',$program_code)->get();                                                
        $pod = Program::whereRaw('codigo_prog = ?', [$program_code])->get();        
        return view('edit', ['program'=>$pod,
    'id'=>$programid]);*/
    }

    public function updateprogram(Request $request, Programa $program){                 
        $program->Codigo_prog=$request->code;
        $program->Nombre=$request->name;
        $program->Estado=$request->status;
        $program->Nivel_formacion=$request->level;
        $program->Duracion=$request->duration;
        $program->Version=$request->version;        
        $program->save();        
         return redirect()->route('form');
    }  

    
}
