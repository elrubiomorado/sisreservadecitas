<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            "name" => "Administrador",
            "email" => "admin@admin.com",
            "password" => Hash::make("12345678"),
            
        ]);

        User::create([
            "name" => "Secretaria",
            "email" => "secretaria@secretaria.com",
            "password" => Hash::make("12345678"),
            
        ]);

        User::create([
            "name" => "doctor",
            "email" => "doctor@doctor.com",
            "password" => Hash::make("12345678"),
            
        ]);
        User::create([
            "name" => "doctor",
            "email" => "paciente@paciente.com",
            "password" => Hash::make("12345678"),
            
        ]);
    }
}
