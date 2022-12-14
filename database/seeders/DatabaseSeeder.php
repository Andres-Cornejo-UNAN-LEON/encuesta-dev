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
        $this->call([
            UsuarioSeeders::class,
            SexoSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            DatosGeneralesSeeder::class,
            TipomatriculaSeeder::class,
            BecadoSeeder::class,
            FacultadSeeder::class,
            CarreraSeeder::class,
            DatosAcademicosSeeder::class,
            PreguntaSeeder::class,
            ResultadoEncuestaSeeder::class
        ]);
       
    }
}
