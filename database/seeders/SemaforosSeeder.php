<?php

namespace Database\Seeders;

use App\Models\Semaforo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemaforosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //////////////////////////////
        //////---1_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        /////////ESPECIFICAR//////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('1');
        $Resultado1->Trimestre=('1');
        $Resultado1->Codigo_comp=('220501006');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////////ANALIZAR////////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('1');
        $Resultado1->Codigo_comp=('220501032');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////////DISEÑAR/////////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('1');
        $Resultado1->Codigo_comp=('220501033');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////---2_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        ///////////DISEÑAR////////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('2');
        $Resultado1->Codigo_comp=('220501033');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////////PARTICIPAR//////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('1');
        $Resultado1->Trimestre=('2');
        $Resultado1->Codigo_comp=('220501009');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////////CONSTRUIR///////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('2');
        $Resultado1->Codigo_comp=('220501007');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////---3_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        ///////////CONSTRUIR//////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('3');
        $Resultado1->Trimestre=('3');
        $Resultado1->Codigo_comp=('220501007');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        ///////////APLICAR////////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('3');
        $Resultado1->Codigo_comp=('220501035');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        //////---4_TRIMESTRE---///////
        //////////////////////////////
        //////////////////////////////
        ///////////CONSTRUIR//////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('1');
        $Resultado1->Trimestre=('4');
        $Resultado1->Codigo_comp=('220501007');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        ///////////IMPLANTAR////////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('4');
        $Resultado1->Codigo_comp=('220501034');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
        //////////////////////////////
        ///////////PARTICIPAR/////////
        //////////////////////////////
        $Resultado1=new Semaforo();
        $Resultado1->Dia_semana=('2');
        $Resultado1->Trimestre=('4');
        $Resultado1->Codigo_comp=('220501009');
        $Resultado1->Codigo_prog=('228106');
        $Resultado1->save();
    }
}
