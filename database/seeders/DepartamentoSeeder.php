<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('departamentos')->truncate();
        DB::table('departamentos')->insert(
            [
                ['nombre'=>'Boaco', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Carazo', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Chinandega', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Chontales', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Atlantico Norte', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Atlantico Sur', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Esteli', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Granada', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Jinotega', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Leon', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Madriz', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Managua', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Masaya', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Matagalpa', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Nueva Segovia', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Río San Juan', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['nombre'=>'Rivas', 'created_at'=>new DateTime, 'updated_at'=>new DateTime]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
