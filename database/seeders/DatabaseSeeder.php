<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => env('ADM_NAME'),
            'cedula' => env('ADM_CEDULA'),
            'telefono' => env('ADM_TELEFONO'),
            'email' => env('ADM_EMAIL'),
            'password' => env('ADM_PASSWORD'),
        ]);
    }
}
