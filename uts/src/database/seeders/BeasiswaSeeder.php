<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;
use Carbon\Carbon;

class BeasiswaSeeder extends Seeder
{
    public function run(): void
    {
        $beasiswas = [
            [
                'nama' => 'Beasiswa Indonesia Cerdas',
                'deskripsi' => 'Beasiswa untuk mendukung mahasiswa berprestasi dari seluruh Indonesia.',
                'syarat' => 'Mahasiswa aktif S1, IPK minimal 3.0, memiliki prestasi akademik atau non-akademik.',
                'deadline' => Carbon::now()->addMonths(1)->format('Y-m-d'),
                'link_pendaftaran' => 'https://beasiswa-indonesiacerdas.example.com/pendaftaran',
            ],
            [
                'nama' => 'Beasiswa Unggulan Kemendikbud',
                'deskripsi' => 'Beasiswa dari Kementerian Pendidikan dan Kebudayaan untuk studi S1 dan S2.',
                'syarat' => 'Warga negara Indonesia, IPK minimal 3.25, aktif di organisasi kemahasiswaan.',
                'deadline' => Carbon::now()->addMonths(2)->format('Y-m-d'),
                'link_pendaftaran' => 'https://beasiswa-unggulan.kemdikbud.go.id/daftar',
            ],
            [
                'nama' => 'Beasiswa LPDP',
                'deskripsi' => 'Beasiswa penuh untuk studi S2 dan S3 di dalam dan luar negeri.',
                'syarat' => 'WNI, lulusan perguruan tinggi terakreditasi, IPK minimal 3.0, lolos seleksi administrasi.',
                'deadline' => Carbon::now()->addMonths(3)->format('Y-m-d'),
                'link_pendaftaran' => 'https://lpdp.kemenkeu.go.id/pendaftaran',
            ],
        ];

        foreach ($beasiswas as $data) {
            Beasiswa::updateOrCreate(
                ['nama' => $data['nama']], // cek berdasarkan nama agar tidak duplikat
                $data
            );
        }
    }
}
