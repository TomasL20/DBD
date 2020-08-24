<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriggerRecordUpdate extends Migration
{
//
    public function up()
    {
        /*
        Trigger y PA del permiso número 1: Publicar, eliminar y editar anuncio.
        */

        DB::statement('
        CREATE OR REPLACE FUNCTION addRecordAds() RETURNS trigger AS $paAddRecord$
        BEGIN
            INSERT INTO records (action) VALUES (1);
            RETURN New;
        END;
        $paAddRecord$
        LANGUAGE plpgsql;
        ');
        DB::unprepared('
        CREATE TRIGGER tg_addRecordAdsInsert
        AFTER INSERT ON ads
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordAds()
        ');

        DB::unprepared('
        CREATE TRIGGER tg_addRecordAdsUpdate
        AFTER UPDATE ON ads
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordAds()
        ');

        DB::unprepared('
        CREATE TRIGGER tg_addRecordAdsDelete
        AFTER DELETE ON ads
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordAds()
        ');
        
        /*
        Trigger y PA del permiso número 2: Agregar, editar y eliminar categoría.
        */

        DB::statement('
        CREATE OR REPLACE FUNCTION addRecordCategories() RETURNS trigger AS $paAddRecord$
        BEGIN
            INSERT INTO records (action) VALUES (2);
            RETURN New;
        END;
        $paAddRecord$
        LANGUAGE plpgsql;
        ');
        DB::unprepared('
        CREATE TRIGGER tg_addRecordCategoriesInsert
        AFTER INSERT ON categories
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordCategories()
        ');


        DB::unprepared('
        CREATE TRIGGER tg_addRecordCategoriesUpdate
        AFTER UPDATE ON categories
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordCategories()
        ');

        DB::unprepared('
        CREATE TRIGGER tg_addRecordCategoriesDelete
        AFTER DELETE ON categories
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordCategories()
        ');


        /* 
        Trigger y PA del permiso número 3: Agregar, editar y eliminar un rol.
        */
        DB::statement('
        CREATE OR REPLACE FUNCTION addRecordRols() RETURNS trigger AS $paAddRecord$
        BEGIN
            INSERT INTO records (action) VALUES (3);
            RETURN New;
        END;
        $paAddRecord$
        LANGUAGE plpgsql;
        ');
        DB::unprepared('
        CREATE TRIGGER tg_addRecordRolsInsert
        AFTER INSERT ON rols
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordRols()
        ');

        DB::unprepared('
        CREATE TRIGGER tg_addRecordRolsUpdate
        AFTER UPDATE ON rols
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordRols()
        ');


        DB::unprepared('
        CREATE TRIGGER tg_addRecordRolsDelete
        AFTER DELETE ON rols
        FOR EACH ROW
        EXECUTE PROCEDURE addRecordRols()
        ');
    }


    public function down()
    {
        Schema::dropIfExists('tg_addRecord');
    }
}
