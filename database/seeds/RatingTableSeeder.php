<?php

use Illuminate\Database\Seeder;
use App\Rating;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Rating::class, 30)->create();
    }
}
