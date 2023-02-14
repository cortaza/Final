<?php

namespace Database\Seeders;

use App\Models\Administracion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministracionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Rol1=new Administracion();
        $Rol1->ID_usuario=('1');
        $Rol1->Rol=('Coordinador');
        $Rol1->Nombre=('Cristian');
        $Rol1->Apellido=('Fernando');
        $Rol1->Contraseña=('Taka123');
        $Rol1->save();
        
        $Rol2=new Administracion();
        $Rol2->ID_usuario=('2');
        $Rol2->Rol=('Administrador');
        $Rol2->Nombre=('Cristina');
        $Rol2->Apellido=('Fernanda');
        $Rol2->Contraseña=('Taka1e3');
        $Rol2->save();
    }
}
