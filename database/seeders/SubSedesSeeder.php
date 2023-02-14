<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subsede;

class SubSedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subsede1=new Subsede();
        $Subsede1->Nombre=('Uniminuto');
        $Subsede1->Codigo_centro=('23471927');
        $Subsede1->save();
        
        $Subsede2=new Subsede();
        $Subsede2->Nombre=('Sibate');
        $Subsede2->Codigo_centro=('23471927');
        $Subsede2->save();
    }
}
