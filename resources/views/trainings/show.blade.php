@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Data Training</h2>

    <div class="form-group">
        <label for="penduduk">Nama Penduduk:</label>
        <input type="text" class="form-control" value="{{ $training->penduduk->nama }}" readonly>
    </div>

    <div class="form-group">
        <label for="ada_tempat_berteduh_tetap">Ada tempat berteduh tetap:</label>
        <input type="text" class="form-control" value="{{ $training->ada_tempat_berteduh_tetap ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="krt_bekerja">KRT Bekerja:</label>
        <input type="text" class="form-control" value="{{ $training->krt_bekerja ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="pernah_khawatir_makan">Pernah khawatir makan/pernah tidak makan:</label>
        <input type="text" class="form-control" value="{{ $training->pernah_khawatir_makan ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="pengeluaran_pangan_lebih_dari_70">Pengeluaran pangan lebih dari 70% total pengeluaran:</label>
        <input type="text" class="form-control" value="{{ $training->pengeluaran_pangan_lebih_dari_70 ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="ada_pengeluaran_pakaian_dalam_setahun">Ada pengeluaran pakaian dalam setahun:</label>
        <input type="text" class="form-control" value="{{ $training->ada_pengeluaran_pakaian_dalam_setahun ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="lantai_terbuat_dari_tanah">Sebagian besar lantai terbuat dari tanah:</label>
        <input type="text" class="form-control" value="{{ $training->lantai_terbuat_dari_tanah ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="dinding_terbuat_dari_bambu_kawat_kayu">Sebagian besar dinding terbuat dari bambu, kawat, atau kayu:</label>
        <input type="text" class="form-control" value="{{ $training->dinding_terbuat_dari_bambu_kawat_kayu ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="punya_fasilitas_buang_air_sendiri">Rumah tangga memiliki fasilitas buang air kecil/besar sendiri:</label>
        <input type="text" class="form-control" value="{{ $training->punya_fasilitas_buang_air_sendiri ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="listrik_pln_450_watt">Penerangan listrik bersumber dari PLN 450 watt atau bukan listrik:</label>
        <input type="text" class="form-control" value="{{ $training->listrik_pln_450_watt ? 'Ya' : 'Tidak' }}" readonly>
    </div>

    <div class="form-group">
        <label for="rekomendasi_kelayakan">Rekomendasi Kelayakan:</label>
        <input type="text" class="form-control" value="{{ $training->rekomendasi_kelayakan }}" readonly>
    </div>

    <a class="btn btn-primary" href="{{ route('trainings.index') }}">Kembali</a>
</div>
@endsection
