@extends('doctor/layouts/docmain')
@section('contain')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Rekam Medis</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/doc">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Edit Rekam Medis</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <form action="/editdata" method="POST">
            @csrf
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Pasien</h5>

                <!-- General Form Elements -->

                    <input type="hidden" value="{{ $rekamMedis[0]->id}}" name="id">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">No. Pasien</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_pasien" value="{{ $rekamMedis[0]->no_pasien }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_pasien" value="{{ $rekamMedis[0]->nama_pasien }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" name="jenis_kelamin">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        <option value="{{ $rekamMedis[0]->jenis_kelamin }}">{{ $rekamMedis[0]->jenis_kelamin }}</option>
                        <option value="Perempuan"  >Perempuan</option>
                        <option value="Laki-laki">Laki-Laki</option>
                      </select>
                    </div>
                  </div>


                <!-- End General Form Elements -->

              </div>
            </div>


            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Kondisi Umum</h5>

                <!-- Multi Columns Form -->
                <div class="row g-3">

                  <div class="row mb-3 border-bottom pb-3">
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">Sistol/Diastol</label>
                      <input type="text" name="sistol" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->sistol }}" >
                      <p class="d-inline">/</p>
                      <input type="text" name="diastol" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->diastol }}">
                      <p class="d-inline">mm/Hg</p>
                    </div>
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">TB/BB</label>
                      <input type="text" name="TB" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->TB }}">
                      <p class="d-inline">/</p>
                      <input type="text" name="BB" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->BB }}">
                      <p class="d-inline">mm/Hg</p>
                    </div>
                  </div>

                  <div class="row mb-3 border-bottom pb-3">
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">Denyut Nadi</label>
                      <input type="text" name="Denyut_nadi" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->Denyut_nadi }}">
                      <p class="d-inline">kali/menit</p>
                    </div>
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">Suhu</label>
                      <input type="text" name="Suhu" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->Suhu }}">
                      <p class="d-inline">°C</p>
                    </div>
                  </div>

                  <div class="row mb-3 border-bottom pb-3">
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">Respirasi</label>
                      <input type="text" name="Respirasi" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->Respirasi }}">
                      <p class="d-inline">per menit</p>
                    </div>
                    <div class="col">
                      <label for="inputName5" class="col-sm-3 form-label">Lingkar Perut</label>
                      <input type="text" name="Lingkar_perut" class="d-inline form-control" id="inputName5" style="width: 100px" value="{{ $rekamMedis[0]->Lingkar_perut }}">
                      <p class="d-inline">cm</p>
                    </div>
                  </div>


                </div><!-- End Multi Columns Form -->
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Data Rekam Medis</h5>

                <!-- General Form Elements -->

                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Anamnesis</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="anamnesis" class="form-control" style="height: 100px">{{ $rekamMedis[0]->anamnesis }}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan Fisik</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="pemeriksaan_fisik" class="form-control" style="height: 100px">{{  $rekamMedis[0]->pemeriksaan_fisik }}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosis</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="diagnosis" class="form-control" style="height: 100px">{{  $rekamMedis[0]->diagnosis }}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tindakan</label>
                    <div class="col-sm-10">
                      <textarea type="text" name="tindakan" class="form-control" style="height: 100px">{{  $rekamMedis[0]->tindakan }}</textarea>
                    </div>
                  </div>
\                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" name="konsultasi_selanjutnya">Konsultasi Selanjutnya</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="konsultasi_selanjutnya">
                        <option value="{{ $rekamMedis[0]->konsultasi_selanjutnya }}" selected>{{ $rekamMedis[0]->konsultasi_selanjutnya }}</option>
                        <option value="Tidak Perlu Konsultasi Lanjutan">Tidak Perlu Konsultasi Lanjutan</option>
                        <option value="1 minggu">1 minggu</option>
                        <option value="2 minggu">2 minggu</option>
                        <option value="1 bulan">1 bulan</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" name="dokter_pemeriksa">Dokter Pemeriksa</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" name="dokter_pemeriksa">
                        <option value="{{ $rekamMedis[0]->dokter_pemeriksa }}" selected>{{ $rekamMedis[0]->dokter_pemeriksa }}</option>
                        <option value="dr.Tama Raharja">dr.Tama Raharja</option>
                        <option value="dr.Satya Kusuma">dr.Satya Kusuma</option>
                        <option value="dr.Budi Harjo">dr.Budi Harjo</option>
                      </select>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary mt-3" >Submit All Data</button>
                  </div>

              </div>
            </div>

          </form>
          </div>
      </div>
    </section>

</main><!-- End #main -->
  @endsection
