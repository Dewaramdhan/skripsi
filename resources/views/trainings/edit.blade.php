@extends('layouts.app')

@section('title', 'Edit Data Training')

@section('content')
<div class="container">
    <h2>Edit Data Training</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('trainings.update', $training->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="penduduk_id">Nama Penduduk:</label>
                    <select name="penduduk_id" id="penduduk_id" class="form-control">
                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->id }}" {{ $penduduk->id == $training->penduduk_id ? 'selected' : '' }}>{{ $penduduk->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ada Tempat Berteduh Tetap:</strong>
                    <select name="ada_tempat_berteduh_tetap" class="form-control">
                        <option value="1" {{ $training->ada_tempat_berteduh_tetap ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$training->ada_tempat_berteduh_tetap ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>KRT Bekerja:</strong>
                    <select name="krt_bekerja" class="form-control">
                        <option value="1" {{ $training->krt_bekerja ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$training->krt_bekerja ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pernah Khawatir Makan:</strong>
                    <select name="pernah_khawatir_makan" class="form-control">
                        <option value="1" {{ $training->pernah_khawatir_makan ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$training->pernah_khawatir_makan ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengeluaran Pangan > 70%:</strong>
                    <select name="pengeluaran_pangan_lebih_dari_70" class="form-control">
                        <option value="1" {{ $training->pengeluaran_pangan_lebih_dari_70 ? 'selected' : '' }}>Ya
                        </option>
                        <option value="0" {{ !$training->pengeluaran_pangan_lebih_dari_70 ? 'selected' : '' }}>Tidak
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ada Pengeluaran Pakaian Dalam Setahun:</strong>
                    <select name="ada_pengeluaran_pakaian_dalam_setahun" class="form-control">
                        <option value="1" {{ $training->ada_pengeluaran_pakaian_dalam_setahun ? 'selected' : '' }}>Ya
                        </option>
                        <option value="0" {{ !$training->ada_pengeluaran_pakaian_dalam_setahun ? 'selected' : '' }}>
                            Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lantai Terbuat dari Tanah:</strong>
                    <select name="lantai_terbuat_dari_tanah" class="form-control">
                        <option value="1" {{ $training->lantai_terbuat_dari_tanah ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$training->lantai_terbuat_dari_tanah ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dinding Terbuat dari Bambu/Kayu:</strong>
                    <select name="dinding_terbuat_dari_bambu_kawat_kayu" class="form-control">
                        <option value="1" {{ $training->dinding_terbuat_dari_bambu_kawat_kayu ? 'selected' : '' }}>Ya
                        </option>
                        <option value="0" {{ !$training->dinding_terbuat_dari_bambu_kawat_kayu ? 'selected' : '' }}>
                            Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Punya Fasilitas Buang Air Sendiri:</strong>
                    <select name="punya_fasilitas_buang_air_sendiri" class="form-control">
                        <option value="1" {{ $training->punya_fasilitas_buang_air_sendiri ? 'selected' : '' }}>Ya
                        </option>
                        <option value="0" {{ !$training->punya_fasilitas_buang_air_sendiri ? 'selected' : '' }}>Tidak
                        </option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Listrik PLN 450 Watt:</strong>
                    <select name="listrik_pln_450_watt" class="form-control">
                        <option value="1" {{ $training->listrik_pln_450_watt ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$training->listrik_pln_450_watt ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rekomendasi Kelayakan:</strong>
                    <input type="text" name="rekomendasi_kelayakan" class="form-control"
                        value="{{ $training->rekomendasi_kelayakan }}" placeholder="Rekomendasi Kelayakan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>
@endsection