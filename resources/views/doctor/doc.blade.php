@extends('doctor/layouts/docmain')
@section('contain')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/doc">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="container">
        <div class="row">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Jadwal Dokter</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Pulang</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($DoctorSchedules as $DoctorSchedule)
                  <tr>
                    <th>{{ $DoctorSchedule->id }}</th>
                    <td>{{$DoctorSchedule->hari}}</td>
                    <td>{{$DoctorSchedule->jam_masuk}}</td>
                    <td>{{$DoctorSchedule->jam_pulang}}</td>
                    <td>{{$DoctorSchedule->tanggal}}</td>
                    <td>
                      <form action="/schedule/{{ $DoctorSchedule->id }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{  $DoctorSchedule->id  }}">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                      {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Hapus
                      </button> --}}
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                        Edit
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>



        </div>
        <div class="card-footer">
          {{-- {{ $jadwal->links() }} --}}
        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>
  <div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Anda Yakin Ingin Menghapus Data?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Data yang sudah dihapus tidak bisa dilihat kembali
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Hapus</button>
        </div>
      </div>
    </div>
  </div>
</main><!-- End #main -->
@endsection
