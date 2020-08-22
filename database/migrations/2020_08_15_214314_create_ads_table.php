<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//se hace la migracion de la tabla  anuncios
class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id('id'); //Identifiador de la tabla anuncios
            //Se crean las llaves foraneas
            $table->unsignedBigInteger('idProd')->nullable(); //Llave foranea de la tabla anuncios correspondiente al identificador del producto
            $table->unsignedBigInteger('idUser')->nullable();//Llave foranea de la tabla anuncio correspondiente al identificador del usuario

            $table->string('description'); // String, que corresponde a la descriocion del anuncio
            $table->string('descName');//Nombre de la descripcion 
            $table->float('price');//Precio de venta 
            $table->string('arrInfo');//Corresponde a la infromacion del arrendador
            $table->integer('stock');//Corresponde al stock que posee el anuncio (cantidad de productos disponibles)
            $table->boolean('status');//Estado en el cual se encuentra el anuncio o producto publicado (disponible, o no disponible)
            $table->string('location'); //Corresponde la a ubicacion de la persona que hace el anuncio (donde está el producto)
            //Se referencian las llaves foraneas
            $table->foreign('idProd')->references('id')->on('products'); // se referencia la llave foranea que proviene de productos "products"
            $table->foreign('idUser')->references('id')->on('users'); // se referencia la llave foranea que proviene de la tabla usuarios "users"
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
        Schema::dropIfExists('ads');
    }
}
