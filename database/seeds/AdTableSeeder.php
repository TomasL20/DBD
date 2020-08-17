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
        factory(App\Ad::class, 30)->create();
    }
}
