<?php

namespace App\Http\Controllers;

use App\Models\DetailJadwal;
use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'jam_masuk' => 'required',
            'jam_pulang' => 'required'
        ]);
        // $validatedData['hari'] = Carbon::createFromFormat('Y-m-d', $validatedData['tanggal'])->format('l');
        $validatedData['hari'] = date('D');
        // dd($validatedData);
        DoctorSchedule::create($validatedData);
        return redirect('/doc');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorSchedule $doctorSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorSchedule $doctorSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorSchedule $doctorSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoctorSchedule  $doctorSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorSchedule $doctorSchedule, Request $request)
    {
        // dd($request->id);
        DoctorSchedule::destroy($request->id);
        return redirect('/doc');
    }
}
