<?php

namespace Database\Seeders;

use App\Models\Ficha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FichasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Ficha1=new Ficha();
        $Ficha1->Nr_ficha=('2515397');
        $Ficha1->Jornada=('Tarde');
        $Ficha1->Modalidad=('Presencial');
        $Ficha1->Nr_aprendices=('25');
        $Ficha1->Codigo_prog=('228106');
        $Ficha1->Codigo_formacion=('1');
        $Ficha1->DNI=('1111111111');
        $Ficha1->save();
    }
}
