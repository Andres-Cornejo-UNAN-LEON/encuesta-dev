<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ResultadoEncuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('resultado_encuestas')->truncate();
        DB::table('resultado_encuestas')->insert([
            //1
                ['IdPregunta'=>'1','IdEncuestado'=>'1','Respuesta'=>'siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'1','Respuesta'=>'regular', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'1','Respuesta'=>'siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'1','Respuesta'=>'mayor comodidad', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'1','Respuesta'=>'1300', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'1','Respuesta'=>'que de mas informacion', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //2
                ['IdPregunta'=>'1','IdEncuestado'=>'2','Respuesta'=>'algunas veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'2','Respuesta'=>'malo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'2','Respuesta'=>'raras veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'2','Respuesta'=>'mayor facilidad para matricularse', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'2','Respuesta'=>'900', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'2','Respuesta'=>'que sea mas moderno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //3
                ['IdPregunta'=>'1','IdEncuestado'=>'3','Respuesta'=>'casi nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'3','Respuesta'=>'regular', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'3','Respuesta'=>'nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'3','Respuesta'=>'ahorra tiempo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'3','Respuesta'=>'200', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'3','Respuesta'=>'que funcione con mayor facilidad y rapidez', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //4
                ['IdPregunta'=>'1','IdEncuestado'=>'4','Respuesta'=>'nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'4','Respuesta'=>'bueno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'4','Respuesta'=>'raras veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'4','Respuesta'=>'ahorra tiempo', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'4','Respuesta'=>'456', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'4','Respuesta'=>'que este mas disponible', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //5
                ['IdPregunta'=>'1','IdEncuestado'=>'5','Respuesta'=>'casi nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'5','Respuesta'=>'muy bueno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'5','Respuesta'=>'casi siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'5','Respuesta'=>'mayor facilidad para matricularse', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'5','Respuesta'=>'100', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'5','Respuesta'=>'que de mas informacion', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //6
                ['IdPregunta'=>'1','IdEncuestado'=>'6','Respuesta'=>'casi nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'6','Respuesta'=>'regular', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'6','Respuesta'=>'casi nunca', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'6','Respuesta'=>'mayor facilidad para matricularse', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'6','Respuesta'=>'700', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'6','Respuesta'=>'que funcione con mayor facilidad y rapidez', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //7
                ['IdPregunta'=>'1','IdEncuestado'=>'7','Respuesta'=>'siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'7','Respuesta'=>'muy bueno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'7','Respuesta'=>'siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'7','Respuesta'=>'mayor comodidad', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'7','Respuesta'=>'340', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'7','Respuesta'=>'que este mas disponible', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //8
                ['IdPregunta'=>'1','IdEncuestado'=>'8','Respuesta'=>'algunas veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'8','Respuesta'=>'muy bueno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'8','Respuesta'=>'casi siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'8','Respuesta'=>'mayor facilidad para matricularse', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'8','Respuesta'=>'80', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'8','Respuesta'=>'que sea mas moderno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //9
                ['IdPregunta'=>'1','IdEncuestado'=>'9','Respuesta'=>'algunas veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'9','Respuesta'=>'bueno', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'9','Respuesta'=>'raras veces', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'9','Respuesta'=>'mayor facilidad para matricularse', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'9','Respuesta'=>'190', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'9','Respuesta'=>'que este mas disponible', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                //10
                ['IdPregunta'=>'1','IdEncuestado'=>'10','Respuesta'=>'siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'2','IdEncuestado'=>'10','Respuesta'=>'excelente', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'3','IdEncuestado'=>'10','Respuesta'=>'casi siempre', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'4','IdEncuestado'=>'10','Respuesta'=>'mayor comodidad', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'5','IdEncuestado'=>'10','Respuesta'=>'900', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdPregunta'=>'6','IdEncuestado'=>'10','Respuesta'=>'que de mas informacion', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
