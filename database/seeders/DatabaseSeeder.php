<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\User::factory(1)->create();

        // \App\Models\SuratM::factory(20)->create();
        // \App\Models\SuratK::factory(20)->create();

       \App\Models\User::factory()->create([
           'name' => 'Ihsan Rizaldi',
           'email' => 'rizaldiihsan1719@gmail.com',
       ]);
    }
}
