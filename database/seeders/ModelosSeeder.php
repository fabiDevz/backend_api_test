<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelo1 = new Modelo;
        $modelo1 -> nombre_modelo = "Galaxy S21";
        $modelo1 -> marca_id = 1;
        $modelo1 -> save();

        $modelo2 = new Modelo;
        $modelo2 -> nombre_modelo = "Galaxy S21+";
        $modelo2 -> marca_id = 1;
        $modelo2 -> save();

        //crea dos modelos más para cada marca restante

        $modelo3 = new Modelo;
        $modelo3 -> nombre_modelo = "iPhone 12";
        $modelo3 -> marca_id = 2;
        $modelo3 -> save();

        $modelo4 = new Modelo;
        $modelo4 -> nombre_modelo = "iPhone 12 Pro";
        $modelo4 -> marca_id = 2;
        $modelo4 -> save();

        $modelo5 = new Modelo;
        $modelo5 -> nombre_modelo = "P40 Pro";
        $modelo5 -> marca_id = 3;
        $modelo5 -> save();

        $modelo6 = new Modelo;
        $modelo6 -> nombre_modelo = "P40";
        $modelo6 -> marca_id = 3;
        $modelo6 -> save();

        $modelo7 = new Modelo;
        $modelo7 -> nombre_modelo = "Mi 11";
        $modelo7 -> marca_id = 4;
        $modelo7 -> save();


    }
}
