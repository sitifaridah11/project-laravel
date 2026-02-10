<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        siswa::create([
            'nama_kelas' => '11',
            'nis' => '242510208',
            'nama_siswa' => 'siti faridah',
            'jenis_kelamin' => 'perempuan',
            'tanggal_lahir' => '11 April 2008',
            'alamat' => 'Desa.selamanik,Kec.Cipaku',
            'email' => 'sitifarida00999@gmail.com',
            'no_telepon' => '088224458516',
        ]);
    }
}