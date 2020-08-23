<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Se crea la tabla de usuario , la cual posee todo el contenido con el cual va a trabajarse el usuario
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations. Hola buenas tardes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id'); // Id del usuario que posee dentro de la tabla
            $table->string('userName'); //nombre de usuario dentro de la página
            $table->string('realName'); //Nombre real que posee el usuario
            $table->string('email')->unique(); //E-mail del usuario, el cual es un dato constraint, se maneja como unico
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); //clave del usuario
            $table->rememberToken();
            $table->timestamps(); //saber cuando se crea una tabla, o cuando se ha hecho una migracion.
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
        Schema::dropIfExists('users');
    }
}
