<?php

namespace Database\Seeders;

use App\Models\CentroFormacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentroFormacionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Centro1=new CentroFormacion();
        $Centro1->Codigo_centro=('23471927');
        $Centro1->Nr_ambientes=('20');
        $Centro1->ID_usuario=('1');
        $Centro1->save();
    }
}
