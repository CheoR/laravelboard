<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // $user = User::factory()
        //     ->create([
        //         // control default user properties
        //         'name' => 'Peggy Pug',
        //         'email' => 'peggy@pug.com',
        //     ]);
    }
}
