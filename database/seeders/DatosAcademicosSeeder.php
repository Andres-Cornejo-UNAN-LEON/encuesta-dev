<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatosAcademicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('datos_academicos')->truncate();
        DB::table('datos_academicos')->insert([
                ['IdFacultad'=>'1','IdCarrera'=>'2','anio'=>'1','IdTipomatricula'=>'1','IdBecado'=>'1','IdDatosgenerales'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'1','IdCarrera'=>'2','anio'=>'1','IdTipomatricula'=>'1','IdBecado'=>'1','IdDatosgenerales'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'3','IdCarrera'=>'1','anio'=>'2','IdTipomatricula'=>'2','IdBecado'=>'2','IdDatosgenerales'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'4','IdCarrera'=>'2','anio'=>'2','IdTipomatricula'=>'2','IdBecado'=>'2','IdDatosgenerales'=>'4', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'5','IdCarrera'=>'4','anio'=>'2','IdTipomatricula'=>'3','IdBecado'=>'1','IdDatosgenerales'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'1','IdCarrera'=>'1','anio'=>'3','IdTipomatricula'=>'2','IdBecado'=>'3','IdDatosgenerales'=>'6', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'1','IdCarrera'=>'2','anio'=>'4','IdTipomatricula'=>'3','IdBecado'=>'2','IdDatosgenerales'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'2','IdCarrera'=>'3','anio'=>'1','IdTipomatricula'=>'1','IdBecado'=>'2','IdDatosgenerales'=>'8', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'3','IdCarrera'=>'1','anio'=>'1','IdTipomatricula'=>'1','IdBecado'=>'3','IdDatosgenerales'=>'9', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['IdFacultad'=>'4','IdCarrera'=>'1','anio'=>'1','IdTipomatricula'=>'1','IdBecado'=>'3','IdDatosgenerales'=>'10', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
                
            ]
        );
    }
}
