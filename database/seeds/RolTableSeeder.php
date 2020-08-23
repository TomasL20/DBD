<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Rol::class, 30)->create(); // secrean 30 datos , los cuales son llamados desde la factory Rol
    }
}
