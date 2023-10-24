<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dispositivo;

class DispositivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dispositivo1 = new Dispositivo;
        $dispositivo1 -> nombre_dispositivo = "Celular smartphone";
        $dispositivo1 -> modelo_id = 1;
        $dispositivo1 -> bodega_id = 1;
        $dispositivo1 -> save();

        $dispositivo2 = new Dispositivo;
        $dispositivo2 -> nombre_dispositivo = "Celular smartphone";
        $dispositivo2 -> modelo_id = 2;
        $dispositivo2 -> bodega_id = 1;
        $dispositivo2 -> save();

        $dispositivo3 = new Dispositivo;
        $dispositivo3 -> nombre_dispositivo = "Celular smartphone";
        $dispositivo3 -> modelo_id = 3;
        $dispositivo3 -> bodega_id = 1;


        $dispositivo4 = new Dispositivo;
        $dispositivo4 -> nombre_dispositivo = "Cámara fotográfica";
        $dispositivo4 -> modelo_id = 4;
        $dispositivo4 -> bodega_id = 2;
        $dispositivo4 -> save();

        $dispositivo5 = new Dispositivo;
        $dispositivo5 -> nombre_dispositivo = "Cámara fotográfica";
        $dispositivo5 -> modelo_id = 4;
        $dispositivo5 -> bodega_id = 2;
        $dispositivo5 -> save();

        $dispositivo6 = new Dispositivo;
        $dispositivo6 -> nombre_dispositivo = "Cámara fotográfica";
        $dispositivo6 -> modelo_id = 4;
        $dispositivo6 -> bodega_id = 2;
        $dispositivo6 -> save();

        $dispositivo7 = new Dispositivo;
        $dispositivo7 -> nombre_dispositivo = "Smartwatch";
        $dispositivo7 -> modelo_id = 4;
        $dispositivo7 -> bodega_id = 3;
        $dispositivo7 -> save();

        $dispositivo8 = new Dispositivo;
        $dispositivo8 -> nombre_dispositivo = "Smartwatch";
        $dispositivo8 -> modelo_id = 4;
        $dispositivo8 -> bodega_id = 3;
        $dispositivo8 -> save();




    }
}
