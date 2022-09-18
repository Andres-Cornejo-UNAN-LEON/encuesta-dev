<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('sexos')->truncate();
        DB::table('sexos')->insert([
                ['genero'=>'Masculino', 
                'created_at'=>new DateTime(), 
                'updated_at'=>new DateTime()],

                ['genero'=>'Femenino', 
                'created_at'=>new DateTime(), 
                'updated_at'=>new DateTime()]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
