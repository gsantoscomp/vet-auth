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
            [
                'type' => 'master',
                'description' => 'Usuário Master'
            ],
        ];

        $adminPermissions = [
            [
                'name' =>'animals.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'animals.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'animals.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'animals.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'animals.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'appointment.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'appointment.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'appointment.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'appointment.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'appointment.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'medicine.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'medicine.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'medicine.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'medicine.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'medicine.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'client.animals',
                'user_type_id' => 1
            ],
            [
                'name' =>'procedure.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'procedure.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'procedure.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'procedure.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'procedure.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'userType.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'userType.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'userType.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'userType.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'userType.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'user.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'user.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'user.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'user.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'user.destroy',
                'user_type_id' => 1
            ],
            [
                'name' =>'permission.index',
                'user_type_id' => 1
            ],
            [
                'name' =>'permission.show',
                'user_type_id' => 1
            ],
            [
                'name' =>'permission.store',
                'user_type_id' => 1
            ],
            [
                'name' =>'permission.update',
                'user_type_id' => 1
            ],
            [
                'name' =>'permission.destroy',
                'user_type_id' => 1
            ],
        ];

        UserType::create($userTypes);
    }
}
