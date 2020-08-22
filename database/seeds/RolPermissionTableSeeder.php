<?php

use Illuminate\Database\Seeder;
use App\RolPermission;

class RolPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            factory(App\RolPermission::class, 30)->create(); // secrean 30 datos , los cuales son llamados desde la factory "rolpermission"
    }
}
