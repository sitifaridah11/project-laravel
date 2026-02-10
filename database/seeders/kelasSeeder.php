<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas;

class kelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kelas::create([
            'nama_kelas' => 'XI RPL 1',
            'jurusan' => 'Rekayasa Perangkat Lunak',
        ]);
    }
}
