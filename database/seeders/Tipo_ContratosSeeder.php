<?php

namespace Database\Seeders;

use App\Models\TipoContrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_ContratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contrato1=new TipoContrato();
        $Contrato1->Codigo_contrato=(1);
        $Contrato1->Valor=(1200000);
        $Contrato1->Descripcion=('Trabajara cierto tiempo en la cede');
        $Contrato1->Tipo=('Contrato');
        $Contrato1->save();
        
        $Contrato1=new TipoContrato();
        $Contrato1->Codigo_contrato=(2);
        $Contrato1->Valor=(1200000);
        $Contrato1->Descripcion=('Trabajara de forma indefinida en la cede');
        $Contrato1->Tipo=('Planta');
        $Contrato1->save();
    }
}
