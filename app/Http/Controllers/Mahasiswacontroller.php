<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011700333',
            'nama' => 'ahmad sandi',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'amatsandi6@gmail.com',
            'status' => 'aktif',
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}