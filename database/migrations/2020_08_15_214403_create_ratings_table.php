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
            //Se crea la llave foranea
            $table->unsignedBigInteger('idAd')->nullable(); //Llave foranea correspondiente al identificador del anuncio

            $table->integer('rate'); // Corresponde a la evaluacion del anuncio numero 
            $table->string('comment'); // corresponde al comentario de la evaluacion
            $table->timestamp('commentDate');

            //Se referencia la llave foranea
            $table->foreign('idAd')->references('id')->on('ads'); //Se referencia la llave foranea que proviene de anuncios "ads"
            
            $table->timestamps();
            $table->softDeletes();
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
