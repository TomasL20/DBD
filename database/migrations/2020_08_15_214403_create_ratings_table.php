<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Se hace la migracion de la tabla "ratings"
class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('id'); //Identificador de la tabla "ratings"
            $table->unsignedBigInteger('idAd'); //Llave foranea correspondiente al identificador del anuncio

            $table->integer('rate'); // Corresponde a la evaluacion del anuncio numero 
            $table->string('comment'); // corresponde al comentario de la evaluacion
            $table->timestamp('commentDate');

            $table->foreign('idAd')->references('id')->on('ads');
            
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
        Schema::dropIfExists('ratings');
    }
}
