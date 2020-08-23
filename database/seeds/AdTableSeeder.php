<?php

use Illuminate\Database\Seeder;
use App\Ad;

class AdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ad::class, 30)->create(); // se crean 30 datos , los cuales son llamados desde la factory "Ad"
    }
}
