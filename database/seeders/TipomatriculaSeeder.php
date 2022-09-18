<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TipomatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('tipomatriculas')->truncate();
        DB::table('tipomatriculas')->insert([
                ['tipo'=>'Nuevo Ingreso', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['tipo'=>'Reingreso', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['tipo'=>'Repitente', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
