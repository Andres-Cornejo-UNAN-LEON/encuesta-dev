<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UsuarioSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS = 0;");
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                "name" => "Andres Alexander Cornejo Lira",
                "email" => "andrescornejolira@gmail.com",
                "email_verified_at" => new DateTime(),
                "admin" => 1,
                "password" => Hash::make("Gaviota13"),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime()
            ],/*
            [   //Usuario Denis
                "name" => "",
                "email" => "",
                "email_verified_at" => new DateTime(),
                "admin" => 1,
                "password" => Hash::make("password"),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime()
            ],
            [   //Usuario Marcelo
                "name" => "",
                "email" => "",
                "email_verified_at" => new DateTime(),
                "admin" => 1,
                "password" => Hash::make("password"),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime()
            ],*/
            [   //Usuario Invitado(Para pruebas)
                "name" => "Usuario prueba",
                "email" => "usuarioprueba@gmail.com",
                "email_verified_at" => new DateTime(),
                "admin" => 0,
                "password" => Hash::make("passwd1234"),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime()
            ]
        ]);
        DB::statement("SET FOREIGN_KEY_CHECKS = 1;");
    }
}
