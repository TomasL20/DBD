<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id');

            $table->unsignedBigInteger('idProd');
            $table->unsignedBigInteger('idUser');

            $table->string('description');
            $table->string('descName');
            $table->float('price');
            $table->string('arrInfo');
            $table->integer('stock');
            $table->boolean('status');
            $table->string('location');

            $table->foreign('idProd')->references('id')->on('products');
            $table->foreign('idUser')->references('id')->on('users');
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
