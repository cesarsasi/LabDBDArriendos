<?php

use Illuminate\Database\Seeder;

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
        $this->call(TransactionTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(RolUserTableSeeder::class);
        //$this->call(PurchaseTableSeeder::class);
        
    }
}
