<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->integer('no_pasien');
            $table->integer('sistol');
            $table->integer('diastol');
            $table->integer('TB');
            $table->integer('BB');
            $table->integer('Denyut_nadi');
            $table->integer('Respirasi');
            $table->decimal('Suhu', $precision = 3, $scale = 1);
            $table->integer('Lingkar_perut')->nullable();
            $table->string('nama_pasien');
            $table->text('anamnesis');
            $table->text('pemeriksaan_fisik');
            $table->text('diagnosis');
            $table->text('tindakan');
            $table->enum('konsultasi_selanjutnya', ['Tidak Perlu Konsultasi Lanjutan', '1 minggu', '2 minggu', '1 bulan']);
            $table->enum('dokter_pemeriksa', ['dr.Tama Raharja', 'dr.Satya Kusuma', 'dr.Budi Harjo']);
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-Laki']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
};
