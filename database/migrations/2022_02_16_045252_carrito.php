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
        Schema::create('carritos', function (Blueprint $table) {

            //borrado en cascada
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            //campos
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('productos_id')->unsigned();

            $table->timestamps();

            //relacion a otras tablas
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('productos_id')->references('id')->on('productos');
            //->onDelete("cascade"); para borrar en cascada desde otras tablas.
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
};
