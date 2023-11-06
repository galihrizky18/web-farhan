<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AbsensiKaryawan;
use App\Models\Karyawan;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

    User::create([
        'id_karyawan'=> '12345',
        'username'=> 'admin',
        'password'=> bcrypt('123'),
    ]);
    User::create([
        'id_karyawan'=> '098765',
        'username'=> 'admin2',
        'password'=> bcrypt('123'),
    ]);
    User::create([
        'id_karyawan'=> '45678',
        'username'=> 'admin3',
        'password'=> bcrypt('123'),
    ]);
    AbsensiKaryawan::create([
        'id_karyawan' => '12345',
        'daftar_hadir' => 'Hadir',
        'jam' => '08:00:00',
    ]);
    AbsensiKaryawan::create([
        'id_karyawan' => '098765',
        'daftar_hadir' => 'Izin',
    ]);
    AbsensiKaryawan::create([
        'id_karyawan' => '45678',
        'daftar_hadir' => 'Sakit',
    ]);

    Karyawan::create([
        'id_karyawan' => '12345',
        'nama_karyawan' => 'Karyawan 1',
        'no_hp' => '09974794223',
        'email' => 'asdasdasd@gmail.com',
    ]);

    Karyawan::create([
        'id_karyawan' => '098765',
        'nama_karyawan' => 'Karyawan 2',
        'no_hp' => '8912614',
        'email' => 'fasuiqh@gmail.com',
    ]);
    Karyawan::create([
        'id_karyawan' => '45678',
        'nama_karyawan' => 'Karyawan 3',
        'no_hp' => '2178418113',
        'email' => 'ufguiyqweuiwq@gmail.com',
    ]);

    }
}
