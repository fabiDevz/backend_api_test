<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id();
            $table -> unsignedBigInteger('bodega_id');
            $table -> foreign('bodega_id')->references('id')-> on('bodegas');
            $table->string('nombre_dispositivo');
            $table -> unsignedBigInteger('modelo_id');
            $table -> foreign('modelo_id')->references('id')-> on('modelos');
            
            
            $table->timestamps();


            /*$table->unsignedBigInteger('user_id');
 
    $table->foreign('user_id')->references('id')->on('users'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositivos');
    }
};
