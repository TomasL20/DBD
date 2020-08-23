<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//Se realiza la migracion de la tabla "records"
class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id('id'); //Identificador de la tabla "records"
            $table->string('action'); //Corresponde al ghistorial de la base de datos, lo que se ha realizado
            $table->timestamp('createdAt'); //Fecha de cracion de la accion o el historial
            $table->timestamp('updatedAt'); //Fecha de actualizacion del historial
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
        Schema::dropIfExists('records');
    }
}
