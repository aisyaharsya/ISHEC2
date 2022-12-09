@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
        
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Cari</button>
              </li>
        
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              
                <!-- Pencarian berdasarkan nama form -->
              <form action="" method="post">
                @csrf
                  <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 ">Nama Lengkap</label>
                      <div class="col-md-8">
                        <select class="form-control" name="nama">
                          <option value="0">Pilih Nama</option>
                          @foreach ($pasien as $item)
                          <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
        
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div>
               </form>

                  <!-- End Pencarian berdasarkan nama form  -->
        
              </div>
        
            </div><!-- End Bordered Tabs -->
        
          </div>
        </div>

    @if (isset($rekam))
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>NAMA PASIEN</th>
                  <th>SISTOL</th>
                  <th>DIASTOL</th>
                  <th>TB-BB</th>
                  <th>DENYUT NADI</th>
                  <th>RESPIRASI</th>
                  <th>SUHU</th>
                  <th>LINGKAR PERUT</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($rekam as $item)
                <tr>
                  <td>{{ $item->nama }}</td>
                  <td>{{$item->sistol}}</td>
                  <td>{{$item->diastol}}</td>
                  <td>{{$item->TB}} - {{$item->BB}}</td>
                  <td>{{$item->Denyut_nadi}}</td>
                  <td>{{$item->Respirasi}}</td>
                  <td>{{$item->Suhu}}°c</td>
                  <td>{{$item->Lingkar_perut}} cm </td>
                </tr>
                @endforeach 
              </div>
            </div>
        @endif
      </div>
    </div>
</div>




      
  {{-- <div class="card">
    <div class="card-body">
      <h4 class="card-title">Riwayat Rekam Medis</h4>
      <h6 class="card-title">Kondisi Umum</h6>
      <label for="exampleInputPassword4">POLI</label>
      <select class="form-control">
        <option>Umum</option>
        <option>Gigi</option>
        <option>KIA</option>
        <option>Lansia</option>
        <option>Psikologi</option>
        <option>Gizi</option>
        <option>Batra</option>
        <option>Anak</option>
    </select>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              NAMA PASIEN
            </th>
            <th>
              SISTOL
            </th>
            <th>
              DIASTOL
            </th>
            <th>
              TB-BB
            </th>
            <th>
              DENYUT NADI
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($RekamMedis as $item)
              <tr>
                <td>{{$item->user->username}}</td>
        <td>{{$item->sistol}}</td>
        <td>{{$item->diastol}}</td>
        <td>{{$item->TB}} / {{$item->BB}}</td>
        <td>{{$item->Denyut_nadi}}</td>
        
                      </tr>
              
          @endforeach --}}
          {{-- <tr>
            <td>
            Herman Beck 
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              Messy Adam
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
             John Richards
            </td>
            <td>
              John Richards
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
             Peter Pan
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              Edward
            </td>
            <td>
              Edward
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
             John Doe
            </td>
            <td>
              John Doe
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
             Henry Lau
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr> --}}
        {{-- </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Diagnosis</h6>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              NO
            </th>
            <th>
              KODE DG
            </th>
            <th>
              DIAGNOSA
            </th>
            <th>
              TIPE
            </th>
            <th>
              KET
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              John Richards
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              Edward
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              John Doe
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h6 class="card-title">Tindakan</h6>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>
              NO
            </th>
            <th>
              TINDAKAN
            </th>
            <th>
              URAIAN
            </th>
            <th>
              KETERANGAN
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              1
            </td>
            <td>
              Herman Beck
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              2
            </td>
            <td>
              Messsy Adam
            </td>
            <td>
              $245.30
            </td>
            <td>
              July 1, 2015
            </td>
          </tr>
          <tr>
            <td>
              3
            </td>
            <td>
              John Richards
            </td>
            <td>
              $138.00
            </td>
            <td>
              Apr 12, 2015
            </td>
          </tr>
          <tr>
            <td>
              4
            </td>
            <td>
              Peter Meggik
            </td>
            <td>
              $ 77.99
            </td>
            <td>
              May 15, 2015
            </td>
          </tr>
          <tr>
            <td>
              5
            </td>
            <td>
              Edward
            </td>
            <td>
              $ 160.25
            </td>
            <td>
              May 03, 2015
            </td>
          </tr>
          <tr>
            <td>
              6
            </td>
            <td>
              John Doe
            </td>
            <td>
              $ 123.21
            </td>
            <td>
              April 05, 2015
            </td>
          </tr>
          <tr>
            <td>
              7
            </td>
            <td>
              Henry Tom
            </td>
            <td>
              $ 150.00
            </td>
            <td>
              June 16, 2015
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Pengobatan</h6>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>
                OBAT
              </th>
              <th>
                JUMLAH
              </th>
              <th>
                JADWAL KONSUM
              </th>
              <th>
                RESEP DOKTER
              </th>
              <th>
                KETERANGAN
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-info">
              <td>
                1
              </td>
              <td>
                Herman Beck
              </td>
              <td>
                Photoshop
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
            </tr>
            <tr class="table-warning">
              <td>
                2
              </td>
              <td>
                Messsy Adam
              </td>
              <td>
                Flash
              </td>
              <td>
                $245.30
              </td>
              <td>
                July 1, 2015
              </td>
            </tr>
            <tr class="table-danger">
              <td>
                3
              </td>
              <td>
                John Richards
              </td>
              <td>
                Premeire
              </td>
              <td>
                $138.00
              </td>
              <td>
                Apr 12, 2015
              </td>
            </tr>
            <tr class="table-success">
              <td>
                4
              </td>
              <td>
                Peter Meggik
              </td>
              <td>
                After effects
              </td>
              <td>
                $ 77.99
              </td>
              <td>
                May 15, 2015
              </td>
            </tr>
            <tr class="table-primary">
              <td>
                5
              </td>
              <td>
                Edward
              </td>
              <td>
                Illustrator
              </td>
              <td>
                $ 160.25
              </td>
              <td>
                May 03, 2015
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div> --}}

@endsection