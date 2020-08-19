<?php

use Illuminate\Database\Seeder;
use App\Purchase;

class PurchaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Purchase::class, 10)->create();
    }
}
