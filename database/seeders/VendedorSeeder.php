<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("vendedors")->insert([
            [
                "id_usuario" => 1,
                "dui" => "76766776-9",
                "direccion" => "San Salvador",
                "nit" => "56575676777567767",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 2,
                "dui" => "099987788787-9",
                "direccion" => "San Salvador",
                "nit" => "23332322343",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 3,
                "dui" => "45567777-9",
                "direccion" => "San Salvador",
                "nit" => "3423576555666",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "id_usuario" => 4,
                "dui" => "675465577-9",
                "direccion" => "San Salvador",
                "nit" => "667687988",
                "created_at" => now(),
                "updated_at" => now(),
            ]]);
    }
}
