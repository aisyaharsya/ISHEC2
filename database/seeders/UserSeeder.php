<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'email'=>'admin@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'shab',
            'alamat' =>'sukodono',
            'tanggal_lahir'=>'2003-06-26',
            'level'=> 0,
            'jenis_kelamin'=>'Perempuan',
            'no_telepon'=>'0812345678',

        ]);
        User::create([
            'email'=>'patient@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'tes',
            'alamat' =>'tes',
            'tanggal_lahir'=>'2000-10-10',
            'level'=> 2,
            'jenis_kelamin'=>'laki laki',
            'no_telepon'=>'0812345678',

        ]);
        User::create([
            'email'=>'dokter@admin.com',
            'password'=> bcrypt('123456'),
            'nama'=> 'shab',
            'alamat' =>'sukodono',
            'tanggal_lahir'=>'2003-06-26',
            'level'=> 1,
            'jenis_kelamin'=>'Perempuan',
            'no_telepon'=>'0812345678',
            'SIP'=>'1204204832',
            'spesialis'=>'Mantan'
        ]);

    }
}
