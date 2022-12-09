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
            $table->integer('id_pasien');
            $table->integer('sistol');
            $table->integer('diastol');
            $table->integer('TB');
            $table->integer('BB');
            $table->integer('Denyut_nadi');
            $table->integer('Respirasi');
            $table->decimal('Suhu', $precision = 3, $scale = 1);
            $table->integer('Lingkar_perut')->nullable();
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
