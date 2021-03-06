<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(20)->create();

        $this->call([
            PostSeeder::class,
            UserSeeder::class,
        ]);
    }
}
