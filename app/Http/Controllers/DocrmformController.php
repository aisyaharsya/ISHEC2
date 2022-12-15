<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use Illuminate\Http\Request;

class DocrmformController extends Controller
{

    public function docrmform () {

        return view('doctor/docrmform');
    }

    public function lihatrm () {
        $data = RekamMedis::find(request('id'));
        return view('doctor/lihatrm', compact('data'));
    }

    public function view() {
        $data = RekamMedis::all();
        return view('doctor/docrm', compact('data'));
    }

    public function insertdata(Request $request) {
        // dd($request);
        $validatedData = $request->validate([
            'no_pasien' => 'required',
            'sistol' => 'required',
            'diastol' => 'required',
            'TB' => 'required',
            'BB' => 'required',
            'Denyut_nadi' => 'required',
            'Respirasi' => 'required',
            'Suhu' => 'required',
            'Lingkar_perut' => 'required',
            'nama_pasien' => 'required',
            'anamnesis' => 'required',
            'pemeriksaan_fisik' => 'required',
            'diagnosis' => 'required',
            'tindakan' => 'required',
            'konsultasi_selanjutnya' => 'required',
            'dokter_pemeriksa' => 'required',
            'jenis_kelamin' => 'required'
        ]);
        // dd($validatedData);\
        RekamMedis::create($validatedData);
        // RekamMedis::where('id', $request->id )->update($validatedData);
        return redirect('/docrm');
    }

    public function edit($id) {
        // dd($id);
        return view('doctor/docrmformEdit', [
            'rekamMedis' => RekamMedis::where('id', $id)->get(),

        ]);
    }

    public function destroy(Request $request) {
        // dd($request->id);
        RekamMedis::destroy($request->id);
        return redirect('/docrm')->with('success', 'Data Berhasil Dihapus');
    }

}
