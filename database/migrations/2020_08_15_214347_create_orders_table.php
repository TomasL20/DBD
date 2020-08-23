<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Se hace la migracion de la tabla  orden "orders"
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id'); //Identificador de la tabla "orders"
            //Se crean las llaves foraneas
            $table->unsignedBigInteger('idUser')->nullable();//Llave foranea que corresponde la identificador del usuario
            $table->unsignedBigInteger('idAd')->nullable();//Llave foranea que corresponde al identificador del anuncio
            $table->unsignedBigInteger('idPay')->nullable();//Llave foranea que corresponde al identificador del pago

            $table->float('totalPrice'); //Corresponde al precio total de la orden
            $table->integer('quantity');//Corresponde a la cantidad de productos de la orden
            $table->timestamp('reservedAt');
            $table->timestamp('freeAt');
            //Se referencian las llaves foraneas
            $table->foreign('idUser')->references('id')->on('users'); //se referencia la llave foranea que proviene de usuarios "users"
            $table->foreign('idAd')->references('id')->on('ads'); //se referencia la llave foranea que proviene de anuncio "ads"
            $table->foreign('idPay')->references('id')->on('payments'); // se referencia la llave foranea que proviene de pago "payments"


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
        Schema::dropIfExists('orders');
    }
}
