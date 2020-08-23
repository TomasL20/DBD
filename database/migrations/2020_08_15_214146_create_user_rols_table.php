<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//corresponde a la migracion de la tabla intermedia rol y usuarios
class CreateUserRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rols', function (Blueprint $table) {
            $table->id('id'); //Identificador correspondiente a la tabla intermedia
            //Se crean las llaves foraneas
            $table->unsignedBigInteger('idRol'); // Identificador de la tabla rol
            $table->unsignedBigInteger('idUser');//Identificador de la tabla usuario

            //Se referencian las llaves foraneas
            $table->foreign('idRol')->references('id')->on('rols');// Se referenacia la llave foranea de la tabla rol
            $table->foreign('idUser')->references('id')->on('users');//Se referencia la llave foranea  de la tabla usuarios
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
        Schema::dropIfExists('user_rols');
    }
}
