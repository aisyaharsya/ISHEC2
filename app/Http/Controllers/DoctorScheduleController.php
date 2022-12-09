<?php

namespace App\Http\Controllers;
use App\Models\DoctorSchedule;

use Illuminate\Http\Request;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        return view ('doctor.doc', [
            "DoctorSchedules"=>DoctorSchedule::all()
        ]);
    }
}
