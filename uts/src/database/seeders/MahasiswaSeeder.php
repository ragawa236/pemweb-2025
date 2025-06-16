<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        $admin = Mahasiswa::updateOrCreate([
            'nama'        => 'Admin',
            'email'       => 'admin@example.com',
            'password'    => Hash::make('admin123'),
            'jurusan'     => 'Manajemen Pendidikan',
            'universitas' => 'Universitas Indonesia',
            'role'        => 'admin',
        ]);

        $admin->assignRole('super_admin');

        // Mahasiswa biasa
        $mahasiswas = [
            [
                'nama'        => 'Alya Nur',
                'email'       => 'alya@example.com',
                'password'    => Hash::make('password'),
                'jurusan'     => 'Teknik Informatika',
                'universitas' => 'ITS',
                'role'        => 'user',
            ],
            [
                'nama'        => 'Rafi Akbar',
                'email'       => 'rafi@example.com',
                'password'    => Hash::make('password'),
                'jurusan'     => 'Ekonomi Pembangunan',
                'universitas' => 'UGM',
                'role'        => 'user',
            ],
        ];

        foreach ($mahasiswas as $data) {
            $mahasiswa = Mahasiswa::create($data);
            $mahasiswa->assignRole('user');
        }
    }
}
