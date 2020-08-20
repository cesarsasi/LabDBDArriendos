<?php

use Illuminate\Database\Seeder;
use App\Publication;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Publication::class, 20)->create();
    }
}
