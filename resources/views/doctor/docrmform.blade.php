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

  <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kondisi Umum</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3">

                <div class="row mb-3 border-bottom pb-3">
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">Sistol/Diastol</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">/</p>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">mm/Hg</p>
                  </div>
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">TB/BB</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">/</p>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">mm/Hg</p>
                  </div>
                </div>

                <div class="row mb-3 border-bottom pb-3">
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">Denyut Nadi</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">kali/menit</p>
                  </div>
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">Suhu</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">°C</p>
                  </div>
                </div>

                <div class="row mb-3 border-bottom pb-3">
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">Respirasi</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">per menit</p>
                  </div>
                  <div class="col">
                    <label for="inputName5" class="col-sm-3 form-label">Lingkar Perut</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 100px">
                    <p class="d-inline">cm</p>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Diagnosis</h5>
              <button type="submit" class="btn btn-primary">Tambah</button>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Diagnosis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tipe</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

          <div class="card">
              <div class="card-body">
                <h5 class="card-title">Obat</h5>
                <button type="submit" class="btn btn-primary">Tambah</button>

                <!-- Multi Columns Form -->
                <form class="row g-3">

                    <div class="row mb-3 border-bottom pb-3">
                    <label for="inputName5" class="col-sm-2 form-label">Nama Obat</label>
                    <input type="text" class="d-inline form-control" id="inputName5" style="width: 700px">
                    </div>

                    <div class="row mb-3 border-bottom pb-3">
                        <label class="text-dark col-sm-3 from-label">Total Obat</label>
                         <div class="d-inline input-group w-auto">
                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                         </div>
                      <select id="inputState" class="d-inline form-select" style="width: 300px">
                        <option value="1">Botol</option>
                        <option value="2">Butir</option>
                      </select>
                    </div>

                  <div class="row mb-3 border-bottom pb-3">
                    <label class="text-dark col-sm-3 from-label">Aturan Pakai</label>
                     <div class="d-inline input-group w-auto">
                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                        <p class="d-inline">Kali Sehari</p>
                     </div>
                    </div>

                    <div class="row mb-3 border-bottom pb-3">
                         <label class="text-dark col-sm-3 from-label">Anjuran Meminum Obat</label>
                         <div class="d-inline input-group w-auto">
                            <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                            <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                            <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                         </div>
                         <select id="inputState" class="form-select" style="width: 300px">
                            <option selected>Jenis Obat</option>
                            <option value="1">Tablet</option>
                            <option value="2">Kaplet</option>
                            <option value="3">Bungkus</option>
                            <option value="4">Sendok Makan</option>
                            <option value="5">Sendok Teh</option>
                          </select>
                   </div>
                  <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Waktu Konsumsi</legend>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      Sebelum Makan
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                      Saat Makan
                    </label>
                  </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Sesudah Makan
                      </label>
                    </div>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Pagi
                      </label>
                  </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Siang
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Sore
                      </label>
                    </div>
                </div>
              </fieldset>
              <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Keterangan</label>
                  </div>
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>
                </form><!-- End Multi Columns Form -->
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tindakan</h5>
                <button type="submit" class="btn btn-primary">Tambah</button>



                <!-- General Form Elements -->
                <form>
                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Tindakan</label>
                      <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Jenis Tindakan</option>
                          <option value="1">Rawat Jalan</option>
                          <option value="2">Rawat Inap</option>
                          <option value="3">Jahit Luka</option>
                          <option value="3">Operasi</option>
                        </select>
                      </div>
                    </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Laborat</h5>
                <button type="submit" class="btn btn-primary">Tambah</button>


                <!-- General Form Elements -->
                <form>
                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label">Laborat</label>
                      <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Jenis Pemeriksaan Laboratorium</option>
                          <option value="1">Laju Endap Darah</option>
                          <option value="2">Darah HB</option>
                          <option value="3">Waktu Pendarahan dan Waktu Pembekuan (CTBT) </option>
                        </select>
                      </div>
                    </div>
                  <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>


        </div>
      </div>
    </section>

</main><!-- End #main -->
  @endsection
