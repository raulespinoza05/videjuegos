<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableVideojuegos1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videojuegos', function (Blueprint $table) {

            $table->unsignedBigInteger('id_desarrolladoras')->change();
            $table->unsignedBigInteger('id_categorias')->change();

            $table->foreign('id_desarrolladoras')->references('id')->on('desarrolladoras');
            $table->foreign('id_categorias')->references('id')->on('categorias');
            
        });
        
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
