<?php

use Illuminate\Database\Seeder;
use App\RolUser;

class RolUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\RolUser::class, 10)->create();
    }
}
