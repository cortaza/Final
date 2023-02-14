<?php

namespace Database\Seeders;

use App\Models\Competencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //////////////////////////////
        /////////ESPECIFICAR//////////
        //////////////////////////////
        $Competencia1=new Competencia();
        $Competencia1->Codigo_comp=('220501006');
        $Competencia1->Nombre=('ESPECIFICAR');
        $Competencia1->Descripcion=('ESPECIFICAR LOS REQUISITOS NECESARIOS PARA DESARROLLAR EL SISTEMA DE
        INFORMACION DE ACUERDO CON LAS NECESIDADES DEL CLIENTE.');
        $Competencia1->Codigo_prog=('228106');
        $Competencia1->save();
        //////////////////////////////
        /////////CONSTRUIR////////////
        //////////////////////////////
        $Competencia2=new Competencia();
        $Competencia2->Codigo_comp=('220501007');
        $Competencia2->Nombre=('CONSTRUIR');
        $Competencia2->Descripcion=('CONSTRUIR EL SISTEMA QUE CUMPLA CON LOS REQUISITOS DE LA SOLUCIÓN INFORMÁTICA.');
        $Competencia2->Codigo_prog=('228106');
        $Competencia2->save();
        //////////////////////////////
        /////////PARTICIPAR///////////
        //////////////////////////////
        $Competencia3=new Competencia();
        $Competencia3->Codigo_comp=('220501009');
        $Competencia3->Nombre=('PARTICIPAR');
        $Competencia3->Descripcion=('PARTICIPAR EN EL PROCESO DE NEGOCIACIÓN DE TECNOLOGÍA INFORMÁTICA PARA
        PERMITIR LA IMPLEMENTACIÓN DEL SISTEMA DE INFORMACIÓN.');
        $Competencia3->Codigo_prog=('228106');
        $Competencia3->save();
        //////////////////////////////
        ////////////ANALIZAR//////////
        //////////////////////////////
        $Competencia4=new Competencia();
        $Competencia4->Codigo_comp=('220501032');
        $Competencia4->Nombre=('ANALIZAR');
        $Competencia4->Descripcion=('ANALIZAR LOS REQUISITOS DEL CLIENTE PARA CONSTRUIR EL SISTEMA DE INFORMACION.');
        $Competencia4->Codigo_prog=('228106');
        $Competencia4->save();
        //////////////////////////////
        //////////DISEÑAR/////////////
        //////////////////////////////
        $Competencia5=new Competencia();
        $Competencia5->Codigo_comp=('220501033');
        $Competencia5->Nombre=('DISEÑAR');
        $Competencia5->Descripcion=('DISEÑAR EL SISTEMA DE ACUERDO CON LOS REQUISITOS DEL CLIENTE.');
        $Competencia5->Codigo_prog=('228106');
        $Competencia5->save();
        //////////////////////////////
        /////////IMPLANTAR////////////
        //////////////////////////////
        $Competencia6=new Competencia();
        $Competencia6->Codigo_comp=('220501034');
        $Competencia6->Nombre=('IMPLANTAR');
        $Competencia6->Descripcion=('IMPLANTAR LA SOLUCION QUE CUMPLA CON LOS REQUISISTOS PARA SU OPERACIÓN. ');
        $Competencia6->Codigo_prog=('228106');
        $Competencia6->save();
        //////////////////////////////
        /////////APLICAR//////////////
        //////////////////////////////
        $Competencia7=new Competencia();
        $Competencia7->Codigo_comp=('220501035');
        $Competencia7->Nombre=('APLICAR');
        $Competencia7->Descripcion=('APLICAR BUENAS PRÁCTICAS DE CALIDAD EN EL PROCESO DE DESARROLLO DE SOFTWARE, DE ACUERDO CON EL REFERENTE ADOPTADO EN LA EMPRESA.');
        $Competencia7->Codigo_prog=('228106');
        $Competencia7->save();
        //////////////////////////////
        //////////PROMOVER////////////
        //////////////////////////////
        $Competencia8=new Competencia();
        $Competencia8->Codigo_comp=('240201500');
        $Competencia8->Nombre=('PROMOVER');
        $Competencia8->Descripcion=('PROMOVER LA INTERACCIÓN IDÓNEA CONSIGO MISMO, CON LOS DEMÁS Y CON LA
        NATURALEZA EN LOS CONTEXTOS LABORAL Y SOCIAL.');
        $Competencia8->Codigo_prog=('228106');
        $Competencia8->save();
    }
}
