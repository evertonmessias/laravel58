<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnotacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anotacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('endereco');
            $table->integer('agendas_id')->unsigned();
            $table->foreign('agendas_id')->references('id')->on('agendas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anotacaos');
    }
}
