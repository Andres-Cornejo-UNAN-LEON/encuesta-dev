<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BecadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('becados')->truncate();
        DB::table('becados')->insert([
                ['Tipobecado'=>'Externo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['Tipobecado'=>'Interno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['Tipobecado'=>'Residencia', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
            ]
        );
    }
}
