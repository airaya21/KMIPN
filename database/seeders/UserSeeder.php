<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Super Admin',
                'email'    => 'admin@ceria.id',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
            ],
            [
                'name'     => 'Budi Santoso',
                'email'    => 'orangtua@ceria.id',
                'password' => Hash::make('parent123'),
                'role'     => 'parent',
            ],
            [
                'name'     => 'Sari Pengasuh',
                'email'    => 'pengasuh@ceria.id',
                'password' => Hash::make('caregiver123'),
                'role'     => 'caregiver',
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }

        $this->command->info('✅ 3 akun demo berhasil dibuat:');
        $this->command->table(
            ['Nama', 'Email', 'Password', 'Role'],
            [
                ['Super Admin',   'admin@ceria.id',     'admin123',     'admin'],
                ['Budi Santoso',  'orangtua@ceria.id',  'parent123',    'parent'],
                ['Sari Pengasuh', 'pengasuh@ceria.id',  'caregiver123', 'caregiver'],
            ]
        );
    }
}
