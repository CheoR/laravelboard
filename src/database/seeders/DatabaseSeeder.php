<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Load;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $user = User::factory(10)->create();
        $user = User::factory()
            ->create([
                // control default user properties
                'name' => 'Peggy Pug',
                'email' => 'peggy@pug.com',
                'password' => 'peggypug',
            ]);

        Load::factory(6)->create([
            'user_id' => $user->id or 1,
        ]);

    }
}
