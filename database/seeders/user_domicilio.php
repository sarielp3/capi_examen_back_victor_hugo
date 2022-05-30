<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class user_domicilio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\usuarios_domicilio::factory(100)->create();
        \App\Models\users::factory(100)->create();
    }
}
