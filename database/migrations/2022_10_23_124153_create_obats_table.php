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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_obat');
            $table->string('macam_obat');
            $table->string('jenis_obat');
            $table->string('Waktu_konsumsi');
            $table->text('keterangan');
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
        Schema::dropIfExists('obats');
    }
};