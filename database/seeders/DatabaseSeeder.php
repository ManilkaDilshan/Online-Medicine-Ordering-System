<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'ishanijayasekaya04@gmail.com',
            'password' => bcrypt('123456789'),
            'phone' => '123456789',
            'date_of_birth' => '1999-02-25',
            'user_type' => '1',
        ]);
    }
}
