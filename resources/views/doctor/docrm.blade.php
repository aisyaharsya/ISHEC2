@extends('doctor/layouts/docmain')
@section('contain')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Rekam Medis</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/doc">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Rekam Medis</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <a href="/docrmform"><button type="button" class="btn btn-success mb-3"><i class="bi bi-plus-lg"></i>Tambah Data Pasien</button></a>

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

        </div>

        <div class="col-xl-9">

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

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No. Pasien</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="No. Pasien" type="text" class="form-control" id="fullName">
                      </div>
                    </div>

                    <div class="text-center">
                      <a href="/docrmform"><button type="submit" class="btn btn-primary">Cari</button></a>
                    </div>
                    <!-- End Pencarian berdasarkan nama form  -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="container">
          <div class="row">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Rekam Medis</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">No. Pasien</th>
                      <th scope="col">Nama Pasien</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data)
                    <tr>
                      <th>{{$data->id}}</th>
                      <td>{{$data->no_pasien}}</td>
                      <td>{{$data->nama_pasien}}</td>
                      <td>{{$data->jenis_kelamin}}</td>

                      <td>
                        <form action="/hapus/{{ $data->id }}" method="POST" style="display: inline">
                          @method('delete')
                          @csrf
                          <input type="hidden" name="id" value="{{  $data->id  }}">
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
                      </form>


                          <a href="/docrmformEdit/{{$data->id}}" class="btn btn-primary" >Edit</a>

                          <form action="/lihatrm" method="POST" style="display: inline">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                          <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#">view</button>
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

  </main><!-- End #main -->

  @endsection
