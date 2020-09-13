<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerAddPerm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE OR REPLACE FUNCTION addPermToSuper() RETURNS trigger AS $addPerm$
        DECLARE index INT;
        BEGIN
            SELECT * INTO index FROM permissions ORDER BY id DESC LIMIT 1;
            INSERT INTO rol_permissions (idPer,idRol) VALUES (index,1);
            RETURN New;
        END;
        $addPerm$
        LANGUAGE plpgsql;
        ');
        
        DB::unprepared('
            CREATE TRIGGER tg_addPerm
            AFTER INSERT ON permissions
            FOR EACH ROW
            EXECUTE PROCEDURE addPermToSuper()
        ');
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tg_addPerm');
    }
}
