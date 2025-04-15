<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dokters = [
            [
                'nama' => 'Dr. Felixer',
                'alamat' => 'Jl. London No. 123',
                'no_hp' => '081234567890',
                'email' => 'felixer@gmail.com',
                'password' => Hash::make('felixer@gmail.com'),
                'role' => 'dokter',
            ],
            [
                'nama' => 'Dr. Allen',
                'alamat' => 'Jl. Paris No. 456',
                'no_hp' => '081234567891',
                'email' => 'allen@gmail.com',
                'password' => Hash::make('allen@gmail.com'),
                'role' => 'dokter',
            ],
        ];

        foreach ($dokters as $dokter) {
            $existingDokter = User::where('email', $dokter['email'])->first();

            if (!$existingDokter) {
                User::create($dokter);
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' berhasil dibuat!');
            } else {
                $this->command->info('Akun dokter ' . $dokter['nama'] . ' sudah ada.');
            }
        }
    }
}
