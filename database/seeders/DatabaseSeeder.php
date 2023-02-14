<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([Red_TematicasSeeder::class]);
        $this->call([Area_TematicasSeeder::class]);
        $this->call([Tipo_ContratosSeeder::class]);
        $this->call([InstructoresSeeder::class]);
        $this->call([AdministracionsSeeder::class]);
        $this->call([CentroFormacionsSeeder::class]);
        $this->call([SubSedesSeeder::class]);
        $this->call([ProgramasSeeder::class]);
        $this->call([DescargasSeeder::class]);
        $this->call([Tipo_FormacionsSeeder::class]);
        $this->call([FichasSeeder::class]);
        // $this->call([AmbienteFormacionsSeeder::class]);
        $this->call([CompetenciasSeeder::class]);
        $this->call([ResultadosSeeder::class]);
        $this->call([SemaforosSeeder::class]);
    }
}
