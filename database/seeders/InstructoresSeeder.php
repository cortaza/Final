<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Instructor1=new Instructor();
        $Instructor1->DNI=('1111111111');
        $Instructor1->Nombre=('Arlenys Carolina');
        $Instructor1->Apellido=('Nieves Vasquez');
        $Instructor1->Telefono=('1111111111');
        $Instructor1->Correo=('acnv@misena.edu.co');
        $Instructor1->Estado=('1');
        $Instructor1->Tipo_contrato=('Planta');
        $Instructor1->Codigo_red=('1');
        $Instructor1->Codigo_area=('1');
        $Instructor1->save();
        
        $Instructor2=new Instructor();
        $Instructor2->DNI=('2222222222');
        $Instructor2->Nombre=('Neidy Adriana');
        $Instructor2->Apellido=('Espitia Suarez');
        $Instructor2->Telefono=('2222222222');
        $Instructor2->Correo=('naespitia@sena.edu.co');
        $Instructor2->Estado=('1');
        $Instructor2->Tipo_contrato=('Planta');
        $Instructor2->Codigo_red=('1');
        $Instructor2->Codigo_area=('1');
        $Instructor2->save();
        
        $Instructor3=new Instructor();
        $Instructor3->DNI=('3333333333');
        $Instructor3->Nombre=('Samuel Ricardo');
        $Instructor3->Apellido=('Padilla Narvaez');
        $Instructor3->Telefono=('3333333333');
        $Instructor3->Correo=('spadilla@sena.edu.co');
        $Instructor3->Estado=('1');
        $Instructor3->Tipo_contrato=('Planta');
        $Instructor3->Codigo_red=('1');
        $Instructor3->Codigo_area=('1');
        $Instructor3->save();
        
        // $Instructor4=new Instructor();
        // $Instructor4->DNI=('1111111111');
        // $Instructor4->Nombre=('Arlenys Carolina');
        // $Instructor4->Apellido=('Nieves Vasquez');
        // $Instructor4->Telefono=('1111111111');
        // $Instructor4->Correo=('acnv@misena.edu.co');
        // $Instructor4->Estado=('1');
        // $Instructor4->Codigo_red=('1');
        // $Instructor4->Codigo_area=('1');
        // $Instructor4->Codigo_contrato=('2');
        // $Instructor4->save();
    }
}
