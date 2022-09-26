<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('preguntas')->truncate();
        DB::table('preguntas')->insert([
                ['pregunta'=>'usted ha usado el sistema de matricula en linea que le ofrece la universidad?','Tipopregunta'=>'tiempo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['pregunta'=>'que le parece el nuevo sistema de matricula en linea que ofrece la UNAN-Leon','Tipopregunta'=>'categoria', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['pregunta'=>'que tan accesible esta el nuevo sistema de matricula en linea que ofrece la UNAN-Leon','Tipopregunta'=>'tiempo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['pregunta'=>'de que manera le ha ayudado el nuevo sistema de matricula en linea que ofrece la UNAN-Leon','Tipopregunta'=>'comodidad', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['pregunta'=>'cuanto dinero le ha ahorrado usar el nuevo sistema de matricula en linea que ofrece la UNAN-Leon','Tipopregunta'=>'insertar', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['pregunta'=>'que recomienda para mejorar el sistema de matricula en linea que ofrece la UNAN-Leon','Tipopregunta'=>'info', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
