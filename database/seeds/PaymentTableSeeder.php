<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Payment::class, 30)->create(); // secrean 30 datos , los cuales son llamados desde la factory "payment"
    }
}
