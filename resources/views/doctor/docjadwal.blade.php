@extends('doctor/layouts/docmain')
@section('contain')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-7">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="/schedule" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-4 col-form-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" name="tanggal">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputTime" class="col-sm-4 col-form-label">Jam</label>
                  <div class="col-sm-8">
                    <input type="time" class="form-control" name="jam_masuk">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputTime" class="col-sm-4 col-form-label">Sampai Dengan</label>
                    <div class="col-sm-8">
                      <input type="time" class="form-control" name="jam_pulang">
                    </div>
                  </div>

                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      </div>
    </section>
@endsection
