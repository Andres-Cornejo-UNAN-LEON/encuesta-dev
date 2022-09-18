<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('facultads')->truncate();
        DB::table('facultads')->insert([
                ['nombre'=>'CIENCIAS AGRARIAS Y VETERINARIAS', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS DE LA EDUCACION', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS ECONOMICAS', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS JURIDICAS Y SOCIALES', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS MEDICAS', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS QUIMICAS', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS Y TECNOLOGIAS', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ODONTOLOGIA', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
                
            ]
        );
    }
}
