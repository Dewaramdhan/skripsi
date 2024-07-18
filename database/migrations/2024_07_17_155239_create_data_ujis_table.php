<?php

// database/migrations/xxxx_xx_xx_create_data_ujis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataUjisTable extends Migration
{
    public function up()
    {
        Schema::create('data_ujis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->boolean('ada_tempat_berteduh_tetap');
            $table->boolean('krt_bekerja');
            $table->boolean('pernah_khawatir_makan');
            $table->boolean('pengeluaran_pangan_lebih_dari_70');
            $table->boolean('ada_pengeluaran_pakaian_dalam_setahun');
            $table->boolean('lantai_terbuat_dari_tanah');
            $table->boolean('dinding_terbuat_dari_bambu_kawat_kayu');
            $table->boolean('punya_fasilitas_buang_air_sendiri');
            $table->boolean('listrik_pln_450_watt');
            $table->float('p_layak')->nullable();
            $table->float('p_tidak_layak')->nullable();
            $table->string('rekomendasi_kelayakan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_ujis');
    }
}
