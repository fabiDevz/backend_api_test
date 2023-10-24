<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca1 = new Marca;
        $marca1 -> nombre_marca = "Samsung";
        $marca1 -> save();

        $marca2 = new Marca;
        $marca2 -> nombre_marca = "Apple";
        $marca2 -> save();

        $marca3 = new Marca;
        $marca3 -> nombre_marca = "Huawei";
        $marca3 -> save();

        $marca4 = new Marca;
        $marca4 -> nombre_marca = "Xiaomi";
        $marca4 -> save();

        $marca5 = new Marca;
        $marca5 -> nombre_marca = "Motorola";
        $marca5 -> save();


    }
}
