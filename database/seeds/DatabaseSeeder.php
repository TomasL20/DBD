<?php

use Illuminate\Database\Seeder;
//Seeder que hace un llamado a los "seeders"
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(RolPermissionTableSeeder::class);
        $this->call(UserRolTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(AdTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(RatingTableSeeder::class);
        
    }
}
