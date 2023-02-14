<?php

namespace Database\Seeders;

use App\Models\Descarga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DescargasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Descarga1=new Descarga();
        $Descarga1->Nombre=('Trimestre1');
        $Descarga1->Codigo_prog=('228106');
        $Descarga1->save();
    }
}
