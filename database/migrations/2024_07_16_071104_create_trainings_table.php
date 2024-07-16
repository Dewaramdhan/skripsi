<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id')->constrained('penduduks')->onDelete('cascade');
            $table->boolean('ada_tempat_berteduh_tetap')->nullable();
            $table->boolean('krt_bekerja')->nullable();
            $table->boolean('pernah_khawatir_makan')->nullable();
            $table->boolean('pengeluaran_pangan_lebih_dari_70')->nullable();
            $table->boolean('ada_pengeluaran_pakaian_dalam_setahun')->nullable();
            $table->boolean('lantai_terbuat_dari_tanah')->nullable();
            $table->boolean('dinding_terbuat_dari_bambu_kawat_kayu')->nullable();
            $table->boolean('punya_fasilitas_buang_air_sendiri')->nullable();
            $table->boolean('listrik_pln_450_watt')->nullable();
            $table->string('rekomendasi_kelayakan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
