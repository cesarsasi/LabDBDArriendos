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
        $this->call(CategoriesTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(RolUserTableSeeder::class);
        $this->call(PublicationsTableSeeder::class);
        $this->call(PurchaseTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(AssessmentsTableSeeder::class);
    }
}
