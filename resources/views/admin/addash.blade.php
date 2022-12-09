@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Jadwal Praktek Dokter</h4>
           
        
                <table class="table">
                  <thead>
                    <tr>
                      <th>HARI</th>
                      <th>PUKUL</th>
                      <th>TANGGAL</th>
                      {{-- <th>STATUS</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwaldokter as $item)
                    <tr>
                      <td>{{ $item->hari }}</td>
                      <td>{{ date('H:i',strtotime($item->jam_masuk) ) }} - {{ date('H:i',strtotime($item->jam_pulang)) }}</td>
                      <td>{{ $item->tanggal }}</td>
                      {{-- <td><label class="badge badge-danger">Pending</label></td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        
        
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Jadwal Kontrol Pasien</h4>
               {{-- <label for="exampleInputPassword4">POLI</label>
              <select class="form-control">
                <option>Umum</option>
                <option>Gigi</option>
                <option>KIA</option>
                <option>Lansia</option>
                <option>Psikologi</option>
                <option>Gizi</option>
                <option>Batra</option>
                <option>Anak</option>
            </select> --}}
        
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>PASIEN</th>
                      <th>Hari</th>
                      <th>TANGGAL</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($jadwalpasien as $item)
                    <tr>
                      <td>{{ ucfirst($item->user->nama) }}</td>
                      <td>{{ Date('D',strtotime($item->tgl_hadir)) }}</td>
                      <td > {{ Date('d M Y',strtotime($item->tgl_hadir))}}</td>
                      @if (strtolower($item->status_reservasi) == 'hadir')
                      <td><label class="badge badge-success">{{ ucfirst( $item->status_reservasi) }}</label></td>
                      @endif
                      @if (strtolower($item->status_reservasi) == 'tidak hadir')
                      <td><label class="badge badge-danger">{{ ucfirst( $item->status_reservasi) }}</label></td>
                      @endif
                      @if(strtolower($item->status_reservasi) == 'belum hadir')
                      <td><label class="badge badge-primary">{{ ucfirst( $item->status_reservasi) }}</label></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>
    </div>


        
      
    
</body>
@endsection