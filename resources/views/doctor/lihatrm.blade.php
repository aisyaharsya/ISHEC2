@extends('doctor/layouts/docmain')
@section('contain')
<main id="main" class="main">

    <section class="section">
        <div class="row">
          <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Data Pasien</h5>

                  <p>No. Pasien = {{$data->no_pasien}}</p>
                  <p>Nama Pasien = {{$data->nama_pasien}}</p>
                  <p>Jenis Kelamin = {{$data->jenis_kelamin}}</p>
          </div>
        </div>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kondisi Umum</h5>

              <p>Sistol= {{$data->sistol}}</p>
              <p>Diastol = {{$data->diastol}}</p>
              <p>TB = {{$data->TB}}</p>
              <p>BB = {{$data->BB}}</p>
              <p>Denyut Nadi = {{$data->Denyut_nadi}}</p>
              <p>Suhu = {{$data->Suhu}}</p>
              <p>Respirasi = {{$data->Respirasi}}</p>
              <p>Lingkar Perut = {{$data->Lingkar_perut}}</p>
      </div>
    </div>

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Rekam Medis</h5>

          <p>Anamnesis= {{$data->anamnesis}}</p>
          <p>Pemeriksaan Fisik = {{$data->pemeriksaan_fisik}}</p>
          <p>Diagnosis = {{$data->diagnosis}}</p>
          <p>Tindakan = {{$data->tindakan}}</p>
          <p>Konsultasi Selanjutnya = {{$data->konsultasi_selanjutnya}}</p>
          <p>Dokter Pemeriksa = {{$data->dokter_pemeriksa}}</p>
  </div>
</div>
    </section>

</main><!-- End #main -->
@endsection
