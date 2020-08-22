<?php

use Illuminate\Database\Seeder;
use App\Record;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Record::class, 30)->create();
    }
}
