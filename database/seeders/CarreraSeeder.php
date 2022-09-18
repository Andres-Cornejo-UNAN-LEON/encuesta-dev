<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('carreras')->truncate();
        DB::table('carreras')->insert([
                ['nombre'=>'INGENIERIA ACUICOLA','IdFacultad'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGENIERIA AGROECOLOGICA','IdFacultad'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGENIERIA EN AGRONEGOCIOS','IdFacultad'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGENIERIA EN ZOOTECNIA','IdFacultad'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'VETERINARIA','IdFacultad'=>'1', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS DE LA EDUCACION CON MENCION EN EDUCACION ESPECIAL','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS DE LA EDUCACIÓN MENCIÓN CIENCIAS NATURALES','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS DE LA EDUCACIÓN MENCIÓN INGLES','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS DE LA EDUCACIÓN MENCIÓN LENGUA Y LITERATURA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS NATURALES','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS SOCIALES','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'COMUNICACION SOCIA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'EDUCACION FISICA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'EDUCACION PRIMARIA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'EXPRESION CULTURAL ARTISTICA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'FISICO-MATEMATICA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGLES','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'LENGUA Y LITERATURA','IdFacultad'=>'2', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ADMINISTRACION DE EMP.','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ADMINISTRACION DE EMPRESAS','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'BUSINESS ADMINISTRATION"','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CONTABILIDAD PUBLICA Y FINANZAS','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CONTADURIA PUB. Y FINANZA','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ECONOMIA','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'GESTION EMPRESA TURIST.','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'MERCADOTECNIA','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN COMERCIO INTERNACIONAL','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN FINANZAS','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN PLANIFICACIÓN DE DESARROLLO LOCAL','IdFacultad'=>'3', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ADMINISTRACION Y POLITICAS PUBLICAS','IdFacultad'=>'4', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'DERECHO','IdFacultad'=>'4', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'LICENCIATURA EN ADMINISTRACION Y POLITICAS PUBLICAS','IdFacultad'=>'4', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'BIOANALISIS CLINICO','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ENFERMERIA','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'MEDICINA','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'PSICOLOGIA','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN ANESTESIOLOGIA','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN CITOTECNOLOGIA','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ECNICO SUPERIOR EN ESTADISTICA DE SALUD','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN HIGIENE DEL MEDIO','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN HIGIENE Y SEG. LABORAL','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TECNICO SUPERIOR EN RADIOLOGIA"','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'TEC. SUP. EN ENFERMERIA EN TECNICAS QUIRURGICAS','IdFacultad'=>'5', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'FARMACIA','IdFacultad'=>'6', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'FARMACIA(NOCTURNO)','IdFacultad'=>'6', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGENIERIA DE ALIMENTOS','IdFacultad'=>'6', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'BIOLOGIA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'CIENCIAS ACTUARIALES','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'COMPUTACION','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ESTADISTICA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'INGENIERIA ESTADISTICA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ING. EN TELEMATICA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ING. SISTEMA DE INFORMA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'MATEMATICA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'QUIMICA','IdFacultad'=>'7', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ASISTENTE DENTAL','IdFacultad'=>'8', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()],
                ['nombre'=>'ODONTOLOGIA','IdFacultad'=>'8', 'created_at'=>new DateTime(), 'updated_at'=>new DateTime()]
                
                
            ]
        );
    }
}
