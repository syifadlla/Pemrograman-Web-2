<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role
        $roleSuperadmin = Role::firstOrCreate(['name' => 'superadmin']);
        $rolePengguna = Role::firstOrCreate(['name' => 'pengguna']);

        // Buat user superadmin
        $superadmin = User::firstOrCreate(
            ['email' => 'superadmin@gmail.com'],
            [
                'name' => 'superadmin',
                'password' => Hash::make('12345678'),
            ]
        );
        $superadmin->assignRole($roleSuperadmin);

        // Buat user pengguna
        $pengguna = User::firstOrCreate(
            ['email' => 'syifa@gmail.com'],
            [
                'name' => 'syifa',
                'password' => Hash::make('12345678'),
            ]
        );
        $pengguna->assignRole($rolePengguna);
    }
}
