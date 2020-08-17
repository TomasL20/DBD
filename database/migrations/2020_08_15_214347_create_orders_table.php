<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id');
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idAd');
            $table->unsignedBigInteger('idPay');

            $table->float('totalPrice');
            $table->integer('quantity');
            $table->timestamp('reservedAt');
            $table->timestamp('freeAt');

            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idAd')->references('id')->on('ads');
            $table->foreign('idPay')->references('id')->on('payments');


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
        Schema::dropIfExists('orders');
    }
}
