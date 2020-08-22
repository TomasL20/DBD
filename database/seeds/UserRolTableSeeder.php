<?php

use Illuminate\Database\Seeder;
use App\UserRol;

class UserRolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\UserRol::class, 30)->create();// secrean 30 datos , los cuales son llamados desde la factory "UserRol"
    }
}
