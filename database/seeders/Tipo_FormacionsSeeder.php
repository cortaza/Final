<?php

namespace Database\Seeders;

use App\Models\TipoFormacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Tipo_FormacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Tipo1=new TipoFormacion();
        $Tipo1->Codigo_formacion=('1');
        $Tipo1->Nombre=('Cadena de formacion');
        $Tipo1->save();
        
        $Tipo2=new TipoFormacion();
        $Tipo2->Codigo_formacion=('2');
        $Tipo2->Nombre=('Oferta regular');
        $Tipo2->save();
    }
}
