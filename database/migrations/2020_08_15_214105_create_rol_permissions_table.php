<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id');
            $table->unsignedBigInteger('idRol');
            $table->unsignedBigInteger('idPer');

            $table->foreign('idRol')->references('id')->on('rols');
            $table->foreign('idPer')->references('id')->on('permissions');
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
