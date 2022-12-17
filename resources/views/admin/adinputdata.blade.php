@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
@if (session()->has('success'))
<script>
    alert('{{ session('success') }}')
   
</script>            
@endif
<div class="container-fluid">

<div class="row">


<div class="col-md-6 grid-margin stretch-card">
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
                  <select class="form-control" name="id_pasien">
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
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit Data Pasien</h4>
      {{-- <label for="">POLI</label>
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
    <form action="/update-profile-pasien" method="post" class="forms-sample">
      @csrf
      @isset($edit_pasien)
      <input type="hidden" name="id" value="{{ $edit_pasien->id }}">
      @endisset
      <div class="form-group">
        <label for="">Nama Pasien</label>
        <input required type="text" @isset($edit_pasien)
            value="{{$edit_pasien->nama}}"
        @endisset name="nama" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <input required type="text" @isset($edit_pasien)
        value="{{ $edit_pasien->alamat }}"
        @endisset name="alamat" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input required type="date"@isset($edit_pasien)
        value="{{$edit_pasien->tanggal_lahir}}"
         @endisset name="tanggal_lahir"  class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="exampleInputCity1">No Telepon</label>
        <input required type="text"@isset($edit_pasien)
        value="{{$edit_pasien->no_telepon}}"
          @endisset name="no_telepon" class="form-control" id="exampleInputCity1">
      </div>
      <div class="form-group">
        <label for="exampleInputCity1">Jenis Kelamin</label>
        <select class="form-select form-control" name="jenis_kelamin" id="">
          @isset($edit_pasien)
            <option value="{{$edit_pasien->jenis_kelamin}}" selected>{{$edit_pasien->jenis_kelamin}}</option>
            @else
            <option value="0" selected>Pilih Jenis Kelamin</option>
          @endisset
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
          <option value="Non Biner">Non Biner</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success mr-2">Submit</button>
      <button class="btn btn-light">Cancel</button>
    </form>
     
    </div>
  </div>
</div>

<div class="col-md-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body pt-3">
      <!-- Bordered Tabs -->
      <ul class="nav nav-tabs nav-tabs-bordered">
  
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit2">Cari</button>
        </li>
  
      </ul>
      <div class="tab-content pt-2">
        <div class="tab-pane fade profile-edit pt-3" id="profile-edit2">
        
          <!-- Pencarian berdasarkan nama form -->
        <form action="" method="post">
          @csrf
            <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 ">Nama Lengkap</label>
                <div class="col-md-8">
                  <select class="form-control" name="id_dokter">
                    <option value="0">Pilih Nama</option>
                    @foreach ($dokter as $item)
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
  <div class="card card-body">
  <h4 class="card-title">Edit Data Dokter</h4>
  {{-- <label for="">POLI</label>
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
 
    <form action="/update-profile-dokter" method="post" class="forms-sample">
      @csrf
      @isset($edit_dokter)
      <input type="hidden" name="id" value="{{ $edit_dokter->id }}">
      @endisset
      <div class="form-group">
        <label for="">Nama Pasien</label>
        <input required type="text" @isset($edit_dokter)
            value="{{$edit_dokter->nama}}"
        @endisset name="nama" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <input required type="text" @isset($edit_dokter)
        value="{{$edit_dokter->alamat}}"
        @endisset name="alamat" class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input required type="date"@isset($edit_dokter)
        value="{{$edit_dokter->tanggal_lahir}}"
         @endisset name="tanggal_lahir"  class="form-control" id="">
      </div>
      <div class="form-group">
        <label for="exampleInputCity1">No Telepon</label>
        <input required type="text"@isset($edit_dokter)
        value="{{$edit_dokter->no_telepon}}"
          @endisset name="no_telepon" class="form-control" id="exampleInputCity1">
      </div>
      <div class="form-group">
        <label for="exampleInputCity1">Jenis Kelamin</label>
        <select class="form-select form-control" name="jenis_kelamin" id="">
          @isset($edit_dokter)
            <option value="{{$edit_dokter->jenis_kelamin}}" selected>{{$edit_dokter->jenis_kelamin}}</option>
            @else
            <option value="0" selected>Pilih Jenis Kelamin</option>
          @endisset
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
          <option value="Non Biner">Non Biner</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success mr-2">Submit</button>
      <button class="btn btn-light">Cancel</button>
    </form>
</div>

</div>
</div>
@endsection