<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DatosGeneralesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('datos_generales')->truncate();
        DB::table('datos_generales')->insert(
            [
                ['cedula'=>'081-110800-1012K', 'nombre'=>'Marcelo','apellido'=>'Zepeda','IdSexo'=>'1','IdDepartamento'=>'1','IdMunicipio'=>'3', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'081-220988-3456I', 'nombre'=>'Andres','apellido'=>'Cornejo','IdSexo'=>'1','IdDepartamento'=>'2','IdMunicipio'=>'1', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'033-301299-4578S', 'nombre'=>'Denis','apellido'=>'Salmeron','IdSexo'=>'1','IdDepartamento'=>'3','IdMunicipio'=>'2', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'892-121298-3487H', 'nombre'=>'Teodoro','apellido'=>'Mairena','IdSexo'=>'1','IdDepartamento'=>'4','IdMunicipio'=>'4', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'111-300188-3212R', 'nombre'=>'Erick','apellido'=>'Parajon','IdSexo'=>'1','IdDepartamento'=>'5','IdMunicipio'=>'2', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'097-311200-7865U', 'nombre'=>'Brian','apellido'=>'Rico','IdSexo'=>'1','IdDepartamento'=>'6','IdMunicipio'=>'3', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'123-240803-4522D', 'nombre'=>'Liliam','apellido'=>'Maritsa','IdSexo'=>'2','IdDepartamento'=>'7','IdMunicipio'=>'1', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'123-150488-2345T', 'nombre'=>'Anna','apellido'=>'Montoya','IdSexo'=>'2','IdDepartamento'=>'8','IdMunicipio'=>'2', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'081-270377-1234K', 'nombre'=>'Karla','apellido'=>'Rodriguez','IdSexo'=>'2','IdDepartamento'=>'9','IdMunicipio'=>'4', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
                ['cedula'=>'123-110379-5464F', 'nombre'=>'Sara','apellido'=>'Connor','IdSexo'=>'2','IdDepartamento'=>'2','IdMunicipio'=>'1', 'created_at'=>new DateTime, 'updated_at'=>new DateTime]
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
