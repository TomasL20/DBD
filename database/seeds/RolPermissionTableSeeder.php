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
            factory(App\RolPermission::class, 30)->create();
    }
}
