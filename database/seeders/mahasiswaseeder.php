<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;
class mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mahasiswas = [
            [
                'nim' => '251011700333',
            'nama' => 'ahmad sandi',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'amatsandi6@gmail.com', 
            'status' => 'aktif',
            ],
        ];
        foreach ($mahasiswas as $mahasiswa){
            mahasiswa::create($mahasiswa);
        }
    }
}
