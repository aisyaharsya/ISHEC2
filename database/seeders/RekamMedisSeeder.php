<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekam_medis')->insert([
            'no_pasien'=>'1212',
            'sistol'=>'12',
            'diastol'=>'12',
            'TB'=>'12',
            'BB'=>'12',
            'Denyut_nadi'=>'12',
            'Respirasi'=>'12',
            'Suhu'=>'12',
            'Lingkar_perut'=>'12',
            'anamnesis'=>'sadsa',
            'pemeriksaan_fisik'=>'sadsa',
            'diagnosis'=>'sadsa',
            'tindakan'=>'sadsa',
            'konsultasi_selanjutnya'=>'1 minggu',
            'dokter_pemeriksa'=>'dr.Tama Raharja',
            'nama_pasien'=>'budi',
            'jenis_kelamin'=>'Perempuan'
        ]);
    }
}
