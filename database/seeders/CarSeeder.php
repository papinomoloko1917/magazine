<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            'Буря' => 'violet',
            'Пламя' => 'red',
            'Ураган' => 'green',
            'Молния' => 'blue',
        ];

        foreach ($cars as $name => $color) {
            DB::table('cars')->insert([
                'name' => $name,
                'description' => fake()->sentence(7),
                'image' => 'cars/'.$color.'.png',
                'price' => fake()->numberBetween(1000000, 9000000),
                'quantity' => fake()->numberBetween(0, 15),
                'is_active' => fake()->boolean(50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
