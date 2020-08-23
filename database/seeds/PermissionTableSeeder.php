<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permission::class, 30)->create(); // secrean 30 datos , los cuales son llamados desde la factory "permission"
    }
}
