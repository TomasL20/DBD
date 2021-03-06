<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// Se hace la migrcion de la tabla productos
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('id');
            //asignamos foraneas
            $table->unsignedBigInteger('idCat')->nullable();
            
            
            $table->string('prodName'); //Nombre del produto 
            //Referenciamos foranea
            $table->foreign('idCat')->references('id')->on('categories'); // Se referencia la foranea de la tabla categoria
            $table->timestamp('eliminatedAt')->nullable();
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
        Schema::dropIfExists('products');
    }
}
