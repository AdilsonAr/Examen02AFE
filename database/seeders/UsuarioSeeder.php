<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("usuarios")->insert([
            [
                "id_usuario" => 1,
                "nombre" => "Jose",
                "contrasena" => "12345678",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 2,
                "nombre" => "David",
                "contrasena" => "12345678",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 3,
                "nombre" => "Adilson",
                "contrasena" => "12345678",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 4,
                "nombre" => "Geovany",
                "contrasena" => "12345678",
                "created_at" => now(),
                "updated_at" => now(),
            ]]);
    }
}
