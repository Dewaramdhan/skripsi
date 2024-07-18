@extends('layouts.app')

@section('title', 'Detail Penduduk')

@section('content')
<div class="container">
    <h2 class="my-4">Detail Penduduk</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label class="form-label"><strong>No KK:</strong></label>
                <p class="form-control-static">{{ $penduduk->nokk }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>NIK:</strong></label>
                <p class="form-control-static">{{ $penduduk->nik }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Nama:</strong></label>
                <p class="form-control-static">{{ $penduduk->nama }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Alamat:</strong></label>
                <p class="form-control-static">{{ $penduduk->alamat }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>RT:</strong></label>
                <p class="form-control-static">{{ $penduduk->rt }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>RW:</strong></label>
                <p class="form-control-static">{{ $penduduk->rw }}</p>
            </div>
            <div class="mb-3">
                <label class="form-label"><strong>Jenis Bantuan:</strong></label>
                <p class="form-control-static">{{ $penduduk->jenis_bantuan }}</p>
            </div>
            <div >
                <a class="btn btn-primary" href="{{ route('penduduk.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
