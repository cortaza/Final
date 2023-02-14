<?php

namespace Database\Seeders;

use App\Models\RedTematica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Red_TematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Red1=new RedTematica();
        $Red1->Nombre=('Informática, Diseño y Desarrollo de Software.');
        $Red1->save();
    }
}
