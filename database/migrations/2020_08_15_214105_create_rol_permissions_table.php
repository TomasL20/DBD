<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//corresponde a la tabla intermedia formada por la tabla rol y la tabla permiso
class CreateRolPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permissions', function (Blueprint $table) {
            $table->id('id'); //Identificador de la tabla
            //Se crean las llavs foraneas
            $table->unsignedBigInteger('idrol');//Identificador de la tabla Rol
            $table->unsignedBigInteger('idper');//Identificador de la tabla permisos
            //Se referencian las llaves foraneas
            $table->foreign('idrol')->references('id')->on('rols'); //corresponde a la llave foranea de la tabla rol
            $table->foreign('idper')->references('id')->on('permissions'); //corresponde a la llave forane a de la tabla permisos
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
        Schema::dropIfExists('rol_permissions');
    }
}
