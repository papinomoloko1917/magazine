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
        $carsData = [
            'Audi-TT' => [
                'description' => 'Компактное спортивное купе с турбомотором и полным приводом',
                'price'       => 3500000, // реалистичная цена на рынке
                'quantity'    => 3,
                'is_active'   => false,
            ],
            'BMW-X3' => [
                'description' => 'Премиальный компактный кроссовер с системой xDrive и дизельным двигателем',
                'price'       => 4200000,
                'quantity'    => 5,
                'is_active'   => false,
            ],
            'Cybertrack' => [
                'description' => 'Электрический пикап с футуристическим дизайном и сверхпрочным кузовом',
                'price'       => 6000000,
                'quantity'    => 6,
                'is_active'   => false,
            ],
            'KIT' => [
                'description' => 'Легендарный автомобиль из сериала «Рыцарь дорог» с искусственным интеллектом',
                'price'       => 5000000,
                'quantity'    => 7,
                'is_active'   => true,
            ],
            'Lamba' => [
                'description' => 'Экзотический суперкар с атмосферным V10 и ярким дизайном',
                'price'       => 8500000,
                'quantity'    => 1,
                'is_active'   => false,
            ],
            'Lamborgini-Diablo' => [
                'description' => 'Культовый итальянский суперкар с V12 мощностью более 500 л.с.',
                'price'       => 10000000,
                'quantity'    => 4,
                'is_active'   => false,
            ],
            'Lexus-LS400' => [
                'description' => 'Флагманский японский седан с бесшумным V8 и исключительной надёжностью',
                'price'       => 1200000,
                'quantity'    => 5,
                'is_active'   => false,
            ],
            'Mitsubishi-Lancer-Evolution' => [
                'description' => 'Легендарный полноприводный седан с турбодвигателем и спортивным характером',
                'price'       => 3000000,
                'quantity'    => 7,
                'is_active'   => true,
            ],
            'Porche-911' => [
                'description' => 'Знаменитое заднемоторное купе с оппозитным двигателем и отличной управляемостью',
                'price'       => 7500000,
                'quantity'    => 9,
                'is_active'   => false,
            ],
            'Toyota-Cresta' => [
                'description' => 'Классический японский седан с комфортной подвеской и надёжной атмосферной рядной шестёркой',
                'price'       => 800000,
                'quantity'    => 11,
                'is_active'   => false,
            ],
            'Toyota-Supra' => [
                'description' => 'Легендарное заднеприводное купе с рядным шестицилиндровым турбодвигателем',
                'price'       => 5500000,
                'quantity'    => 4,
                'is_active'   => false,
            ],
        ];

        foreach ($carsData as $name => $data) {
            DB::table('cars')->insert([
                'name'        => $name,
                'description' => $data['description'],
                'image'       => 'cars/' . $name . '.png', // пути к картинкам
                'price'       => $data['price'],
                'quantity'    => $data['quantity'],
                'is_active'   => $data['is_active'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
