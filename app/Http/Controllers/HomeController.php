<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        // if(Auth::user()->level==0){
        //     return redirect('/ad');
        // }
        // if(Auth::user()->level==1){
        //     return redirect('/doc');
        // }
        $artikel =  DB::table('artikels')->paginate(6);
        // dd($artikel);
        // $artikel = Artikel::all();
        return view('home',[
            'artikel'=> $artikel,
        ]);
       
    }
    public function findjadwal()
    {
    $jadwalFind = DoctorSchedule::where('tanggal',request('date'))->count();
        if($jadwalFind>0){
            return back()->with('found','Jadwal ditemukan');
        }else{
            return back()->with('notfound','Jadwal tidak ditemukan');
        }
    }
}
