<?php

namespace App\Http\Controllers;

use App\Models\AreaTematica;
use App\Models\Instructor;
use App\Models\RedTematica;
use Illuminate\Http\Request;
use DB;

class InstructorController extends Controller
{
    public function formin(){        
        $Instructor=Instructor::all();        
        return view('instructor.formin', ['Instructor'=>$Instructor]);
    }

    /*CREATE 1*/
    public function create(){        
        $Red=RedTematica::all();
        $Instructor=Instructor::all();      
        $Area=AreaTematica::all();
        return view('instructor.create', ['Instructor'=>$Instructor,
                                'Red'=>$Red,
                                'Area'=>$Area]);
    }

    /*DELETE*/
    public function destroy($deleteinstructor){ 
        DB::delete('DELETE FROM instructors WHERE DNI = ?', [$deleteinstructor]);          
            return redirect()->route('instrucform');        
        
    }
    /*CREATE 2*/
    public function createinstructor(Request $request){
        $Instructor=new Instructor();
        $Instructor->DNI=$request->nro_doc;
        $Instructor->Nombre=$request->nombre;
        $Instructor->Apellido=$request->apellido;
        $Instructor->Telefono=$request->telefono;
        $Instructor->Correo=$request->correo;
        $Instructor->Estado=$request->estado;
        $Instructor->Tipo_contrato=$request->contrato;
        $Instructor->Codigo_red=$request->Codigo_red;
        $Instructor->Codigo_area=$request->Codigo_area;
        $Instructor->save();
        return redirect()->route('instrucform');
    }  

    /*EDIT 1*/
    public function view(Instructor $Instructor){    
        return view('instructor.edit', compact('Instructor'));
    }

    public function updateinstructor(Request $request, Instructor $Instructor){                 
        $Instructor->DNI=$request->nro_doc;
        $Instructor->Nombre=$request->nombre;
        $Instructor->Apellido=$request->apellido;
        $Instructor->Telefono=$request->telefono;
        $Instructor->Correo=$request->correo;
        $Instructor->Estado=$request->estado;
        $Instructor->Tipo_contrato=$request->contrato;       
        $Instructor->save();        
         return redirect()->route('instrucform');
    }  
}