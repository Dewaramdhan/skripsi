@extends('layouts.app')

@section('title', 'Detail Data Training')

@section('content')
<div class="container">
    <h2>Detail Data Training</h2>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penduduk:</strong>
                {{ $training->penduduk->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ada Tempat Berteduh Tetap:</strong>
                {{ $training->ada_tempat_berteduh_tetap ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>KRT Bekerja:</strong>
                {{ $training->krt_bekerja ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pernah Khawatir Makan:</strong>
                {{ $training->pernah_khawatir_makan ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengeluaran Pangan > 70%:</strong>
                {{ $training->pengeluaran_pangan_lebih_dari_70 ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ada Pengeluaran Pakaian Dalam Setahun:</strong>
                {{ $training->ada_pengeluaran_pakaian_dalam_setahun ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lantai Terbuat dari Tanah:</strong>
                {{ $training->lantai_terbuat_dari_tanah ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dinding Terbuat dari Bambu/Kayu:</strong>
                {{ $training->dinding_terbuat_dari_bambu_kawat_kayu ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Punya Fasilitas Buang Air Sendiri:</strong>
                {{ $training->punya_fasilitas_buang_air_sendiri ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Listrik PLN 450 Watt:</strong>
                {{ $training->listrik_pln_450_watt ? 'Ya' : 'Tidak' }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rekomendasi Kelayakan:</strong>
                {{ $training->rekomendasi_kelayakan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('trainings.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
