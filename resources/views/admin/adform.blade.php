@extends('admin.admain')
@section('content')
@include('admin.partial.sidebarad')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Rekam Medis</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/ad">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Rekam Medis</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

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

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName">
                        </div>
                      </div>

                    <div class="text-center">
                      <a href="/adrekam"><button type="submit" class="btn btn-primary">Cari</button></a>
                    </div>
                    <!-- End Pencarian berdasarkan nama form  -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection