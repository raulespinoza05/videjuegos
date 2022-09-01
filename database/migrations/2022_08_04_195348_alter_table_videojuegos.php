<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableVideojuegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('videojuegos', function (Blueprint $table) {
            
            $table->date('fecha_publicacion')->nullable();
            $table->integer('categorias');
            $table->integer('desarrolladora');
            $table->tinyInteger('puntuacion');
            $table->tinyInteger('estado');
            
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
