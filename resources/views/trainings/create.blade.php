@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Data Training</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Terdapat beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('trainings.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="penduduk_id">Pilih Penduduk:</label>
            <select name="penduduk_id" class="form-control">
                @foreach ($penduduks as $penduduk)
                    <option value="{{ $penduduk->id }}">{{ $penduduk->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ada_tempat_berteduh_tetap">Ada tempat berteduh tetap:</label>
            <select name="ada_tempat_berteduh_tetap" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="krt_bekerja">KRT Bekerja:</label>
            <select name="krt_bekerja" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pernah_khawatir_makan">Pernah khawatir makan/pernah tidak makan:</label>
            <select name="pernah_khawatir_makan" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pengeluaran_pangan_lebih_dari_70">Pengeluaran pangan lebih dari 70% total pengeluaran:</label>
            <select name="pengeluaran_pangan_lebih_dari_70" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="ada_pengeluaran_pakaian_dalam_setahun">Ada pengeluaran pakaian dalam setahun:</label>
            <select name="ada_pengeluaran_pakaian_dalam_setahun" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="lantai_terbuat_dari_tanah">Sebagian besar lantai terbuat dari tanah:</label>
            <select name="lantai_terbuat_dari_tanah" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dinding_terbuat_dari_bambu_kawat_kayu">Sebagian besar dinding terbuat dari bambu, kawat, atau kayu:</label>
            <select name="dinding_terbuat_dari_bambu_kawat_kayu" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="punya_fasilitas_buang_air_sendiri">Rumah tangga memiliki fasilitas buang air kecil/besar sendiri:</label>
            <select name="punya_fasilitas_buang_air_sendiri" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="listrik_pln_450_watt">Penerangan listrik bersumber dari PLN 450 watt atau bukan listrik:</label>
            <select name="listrik_pln_450_watt" class="form-control">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </select>
        </div>

        <div class="form-group">
            <label for="rekomendasi_kelayakan">Rekomendasi Kelayakan:</label>
            <select name="rekomendasi_kelayakan" class="form-control">
                <option value="Layak">Layak</option>
                <option value="Tidak Layak">Tidak Layak</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
