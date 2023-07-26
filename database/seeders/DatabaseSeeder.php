<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Gsantoscomp\SharedVetDb\Factories\UsuarioFactory;
use Gsantoscomp\SharedVetDb\Models\User;
use Gsantoscomp\SharedVetDb\Models\UserType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userTypes = [
            [
                'type' => 'admin',
                'description' => 'Administrador do Sistema'
            ],
            [
                'type' => 'vet',
                'description' => 'Veterinário'
            ],
        ];

        UserType::create($userTypes);
    }
}
