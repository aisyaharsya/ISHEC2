@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')
@if (session()->has('success'))
<script>
    alert('{{ session('success') }}')
   
</script>            
@endif
<div class="card-body" style="overflow-x:auto;">

    <form action="" method="post">
        @csrf
        <div class="col-md-1"></div>
        <div class="col-md-10">
                                <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Nama Lengkap</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="nama" value="{{ auth()->user()->nama }}" class="form-control" >
                </div>
            </div>
       
           
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Tanggal Lahir</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="tanggal_lahir" value="{{ auth()->user()->tanggal_lahir  }}" class="form-control" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Alamat</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="alamat" value="{{ auth()->user()->alamat }}" class="form-control" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">No telepon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="no_telepon" value="{{ auth()->user()->no_telepon }}" class="form-control" >
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Jenis Kelamin</label>
                </div>
                <div class="col-12 col-md-9">
                    <div class="mb-3">
                        <select class="form-select form-control" name="jenis_kelamin" id="">
                            <option value="{{ auth()->user()->jenis_kelamin }}" selected>{{ auth()->user()->jenis_kelamin }}</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Non Biner">Non Biner</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <hr style="border-top: 1px solid;">
            <center>
                <button type="submit" class="btn btn-outline-primary" role="button">Ubah Profile</button>
            </center>
                            </div>
        <div class="col-md-1"></div>
    </form>

</div>
  
@endsection