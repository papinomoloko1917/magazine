<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\PhoneNumberFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PhoneNumberSeeder::class,
            UserSeeder::class
        ]);
    }
}
