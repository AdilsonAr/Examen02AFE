<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                "nombre" => "camisa 1",
                "descripcion" => "camisa blnca, tela de algodon",
                "garantia" => "6 meses",
                "existencia" => 10,
                "precioUnitario" => 22.3,
                "id_vendedor" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "camisa 2",
                "descripcion" => "camisa blnca, tela de algodon",
                "garantia" => "6 meses",
                "existencia" => 10,
                "precio_unitario" => 22.3,
                "id_vendedor" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "camisa 3",
                "descripcion" => "camisa blnca, tela de algodon",
                "garantia" => "6 meses",
                "existencia" => 10,
                "precio_unitario" => 22.3,
                "id_vendedor" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "camisa 4",
                "descripcion" => "camisa blnca, tela de algodon",
                "garantia" => "6 meses",
                "existencia" => 10,
                "precio_unitario" => 22.3,
                "id_vendedor" => 4,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
    }

