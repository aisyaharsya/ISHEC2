<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use App\Models\reservasi;
use App\Models\RekamMedis;
use Illuminate\Http\Request;
use App\Models\DoctorSchedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PuskesmasController extends Controller
{

    public function lihatartikel()
    {

        $artikel = Artikel::find(request('id'));
        return view('lihatartikel',[
            'artikel'=>$artikel
        ]);
    }
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function doc() {
        // $jadwal = DoctorSchedule::where('doctor_id',Auth::user()->id)->paginate(7);
        return view('doctor/doc');
    }


    public function docprofile() {
        return view('doctor/docprofile');
    }

    public function adartikel() {
        return view('admin/adartikel');
    }

    public function docrm() {
        return view('doctor/docrm');
    }


    public function docjadwal () {
        return view('doctor/docjadwal');
    }


    public function doclogin () {

        return view('doctor/doclogin');
    }

    public function docrmform () {

        return view('doctor/docrmform');
    }

    public function adlogin () {

        return view('admin/adlogin');
    }
    public function adpost(Request $request)
    {
        $pict = $request->file('gambar');
        $pictFolder = 'assets/img/portfolio/';
        $pictName = $pict->getClientOriginalName();
        $pict->move($pictFolder, $pictName);
       $data = [
        'title'=>request('judul'),
        'lokasi_img'=>'assets/img/portfolio/'.$pict->getClientOriginalName(),
        'body'=>$request->isi,
        'excerpt'=>$request->isi,
       ];
       Artikel::create($data);
       return back()->withSuccess('Data berhasil ditambahkan');
    }
  public function ad()
  {
    $date = date('Y-m-d');
    $dateplus7 = date('Y-m-d', strtotime('+7 day', strtotime($date)));
    $jadwalDokter = DoctorSchedule::whereBetween('tanggal',[$date, $dateplus7])->orderBy('tanggal', 'desc')->get();
    $jadwalpasien = reservasi::where('tgl_hadir',$date)->with('user')->get();
    return view('admin.addash',[
        'jadwaldokter'=>$jadwalDokter,
        'jadwalpasien'=>$jadwalpasien
    ]);
  }
  public function profile()
  {
    if(Auth::user()->level == 0){
        return view('admin.adprofile');
    }
    if(Auth::user()->level == 1){
        return view();
    }
    if(Auth::user()->level == 2){
        return view('pasien.profile');
    }
  }
  public function profilepost()
  {
    if(Auth::user()->level == 0){
        User::find(Auth::user()->id)->update([
            'nama' =>request('nama'),
            'tanggal_lahir' =>request('tanggal_lahir'),
            'alamat' =>request('alamat'),
            'no_telepon' =>request('no_telepon'),
            'jenis_kelamin' =>request('jenis_kelamin'),
        ]);
        return back()->withSuccess('Data berhasil di ubah');
    }
    if(Auth::user()->level == 1){
        
        return view();
    }
    if(Auth::user()->level == 2){
        User::find(Auth::user()->id)->update([
            'nama' =>request('nama'),
            'tanggal_lahir' =>request('tanggal_lahir'),
            'alamat' =>request('alamat'),
            'no_telepon' =>request('no_telepon'),
            'jenis_kelamin' =>request('jenis_kelamin'),
        ]);
        return back()->withSuccess('Data berhasil di ubah');
    }
  }
  public function InputData (){
    $pasien = User::where('level','2')->get();
    $dokter = User::where('level','1')->get();
    return view('admin.adinputdata',[
        'pasien'=>$pasien,
        'dokter'=>$dokter

    ]);
  }
  public function dashboardpasien()
  {
    $reservasi = reservasi::where('id_pasien',auth()->user()->id)->orderBy('tgl_hadir')->get();
    // dd($reservasi);
    return view('pasien.dashboardpasien',[
        'reservasiss'=> $reservasi
    ]);
  }
  public function updateProfile()
  {
    User::find(request('id'))->update([
        "nama" => request('nama'),
        "alamat" => request('alamat'),
        "tanggal_lahir" => request('tanggal_lahir'),
        "no_telepon" => request('no_telepon'),
        "jenis_kelamin" => request('jenis_kelamin')
    ]);
    return back()->withSuccess('Data berhasil di ubah');
  }
  public function InputDatafind (){
    $pasien = User::where('level','2')->get();
    $dokter = User::where('level','1')->get();
    if(request('id_pasien')!=null){
       $editpasien = User::find(request('id_pasien'));
       return view('admin.adinputdata',[
        'edit_pasien'=>$editpasien,
        'pasien'=>$pasien,
        'dokter'=>$dokter
    ]);
    }
    if(request('id_dokter')!=null){
        $editdokter = User::find(request('id_dokter'));
        return view('admin.adinputdata',[
         'edit_dokter'=>$editdokter,
         'pasien'=>$pasien,
         'dokter'=>$dokter
        ]);
    }
    // $sended =
    return view('admin.adinputdata',[
        'pasien'=>$pasien,
        'dokter'=>$dokter
    ]);
  }
  public function rekammedis()
  {
    $pasien = User::where('level','2')->get();
    return view('admin.adrekam',[
        'pasien'=>$pasien
    ]);
  }
  public function rekammedisfind()
  {
    $nama = request('nama');
    $pasien = User::where('level','2')->get();

    $rekam = DB::table('rekam_medis')
            ->join('users', 'users.id', '=', 'rekam_medis.no_pasien')
            ->get();
    return view('admin.adrekam',[
        'pasien'=>$pasien,
        'rekam'=>$rekam
    ]);
  }

    public function docregister (){
        return view('doctor/docregister');
    }

    public function reservasi(){
        return view('pasien.reservasi');
    }
    public function buatreservasi($date)
    {
        $data = [
            'id_pasien'=>auth()->user()->id,
            'tgl_reservasi'=>date('Y-m-d'),
            'tgl_hadir'=>$date,
            'status_reservasi'=>'belum hadir'
        ];
        reservasi::create($data);
        return redirect('/dashboard-pasien')->withSuccess('Reservasi berhasil dibuat');
    }
}
