<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'email_admin'=>'admin@admin.com',
            'pass_admin'=> bcrypt('123456'),
            'notelp_admin'=> '0812345678'

        ]);
    }
}
