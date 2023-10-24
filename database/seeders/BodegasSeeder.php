<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bodega;

class BodegasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bodega1 = new Bodega;
        $bodega1 -> save();

        $bodega2 = new Bodega;
        $bodega2 -> save();

        $bodega3 = new Bodega;
        $bodega3 -> save();

        $bodega4 = new Bodega;
        $bodega4 -> save();
    }
}
