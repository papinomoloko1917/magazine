<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Varivoda Max',
            'email' => 'varivoda.maxim@mail.ru',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'name' => 'Petr I',
            'email' => 'petrI@google.com',
            'password' => Hash::make('password')
        ]);
        DB::table('users')->insert([
            'name' => 'Nick',
            'email' => 'nick@yandex.com',
            'password' => Hash::make('password')
        ]);
    }
}
