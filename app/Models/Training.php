<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'penduduk_id',
        'ada_tempat_berteduh_tetap',
        'krt_bekerja',
        'pernah_khawatir_makan',
        'pengeluaran_pangan_lebih_dari_70',
        'ada_pengeluaran_pakaian_dalam_setahun',
        'lantai_terbuat_dari_tanah',
        'dinding_terbuat_dari_bambu_kawat_kayu',
        'punya_fasilitas_buang_air_sendiri',
        'listrik_pln_450_watt',
        'rekomendasi_kelayakan',
    ];

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class);
    }
}
