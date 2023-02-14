<?php

namespace Database\Seeders;

use App\Models\Programa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /////////////////////////////////
        ///////////////ADSI//////////////
        /////////////////////////////////
        $Programa1=new Programa();
        $Programa1->Codigo_prog='228106';
        $Programa1->nombre='ADSI (Analisis y Desarrollo de Sistemas de Informacion)';
        $Programa1->estado='1';
        $Programa1->nivel_formacion='tecnologo';
        $Programa1->duracion='24 meses';
        $Programa1->version='102';
        $Programa1->Codigo_centro='23471927';
        $Programa1->Codigo_area='1';
        $Programa1->save();         
        /////////////////////////////////
        ///////////////ADSO//////////////
        /////////////////////////////////
        $Programa2=new Programa();
        $Programa2->Codigo_prog='228118';
        $Programa2->nombre='ADSO (Analisis y Desarrollo de Software)';
        $Programa2->estado='1';
        $Programa2->nivel_formacion='tecnologo';
        $Programa2->duracion='3984 horas';
        $Programa2->version='1';
        $Programa2->Codigo_centro='23471927';
        $Programa2->Codigo_area='1';
        $Programa2->save(); 
        /////////////////////////////////
        /////////////SOFTWARE////////////
        /////////////////////////////////
        $Programa3=new Programa();
        $Programa3->Codigo_prog='233104';
        $Programa3->nombre='Programacion de Software';
        $Programa3->estado='1';
        $Programa3->nivel_formacion='tecnico';
        $Programa3->duracion='2208 horas';
        $Programa3->version='1';
        $Programa3->Codigo_centro='23471927';
        $Programa3->Codigo_area='1';
        $Programa3->save(); 
    }
}
