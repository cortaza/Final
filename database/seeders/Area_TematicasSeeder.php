<?php

namespace Database\Seeders;

use App\Models\AreaTematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Area_TematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Area1=new AreaTematica();
        $Area1->Nombre=('Software');
        $Area1->Codigo_red=('1');
        $Area1->save();
    }
}
