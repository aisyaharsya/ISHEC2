<?php

namespace Database\Seeders;

use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DoctorSchedule::create([
            'hari'=>'sabtu',
            'jam_masuk'=>'09:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-12-08'
        ]);
        DoctorSchedule::create([
            'hari'=>'minggu',
            'jam_masuk'=>'08:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-12-09'
        ]);
        DoctorSchedule::create([
            'hari'=>'senin',
            'jam_masuk'=>'10:00:00',
            'jam_pulang'=>'18:00:00',
            'tanggal'=>'2022-12-10'
        ]);
        DoctorSchedule::create([
            'hari'=>'selasa',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'12:00:00',
            'tanggal'=>'2022-13-11'
        ]);
        DoctorSchedule::create([
            'hari'=>'rabu',
            'jam_masuk'=>'07:00:00',
            'jam_pulang'=>'13:00:00',
            'tanggal'=>'2022-10-12'
        ]);
        DoctorSchedule::create([
            'hari'=>'kamis',
            'jam_masuk'=>'10:00:00',
            'jam_pulang'=>'16:00:00',
            'tanggal'=>'2022-10-13'
        ]);
        DoctorSchedule::create([
            'hari'=>'jumat',
            'jam_masuk'=>'10:00:00',
            'jam_pulang'=>'12:00:00',
            'tanggal'=>'2022-10-14'
        ]);
    }
}
