@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Penduduk</h2>
    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nokk">No KK:</label>
            <input type="text" class="form-control" id="nokk" name="nokk" value="{{ $penduduk->nokk }}" required>
        </div>
        <div class="form-group">
            <label for="nik">NIK:</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $penduduk->nik }}" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penduduk->nama }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $penduduk->alamat }}" required>
        </div>
        <div class="form-group">
            <label for="rt">RT:</label>
            <input type="text" class="form-control" id="rt" name="rt" value="{{ $penduduk->rt }}" required>
        </div>
        <div class="form-group">
            <label for="rw">RW:</label>
            <input type="text" class="form-control" id="rw" name="rw" value="{{ $penduduk->rw }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_bantuan">Jenis Bantuan:</label>
            <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" value="{{ $penduduk->jenis_bantuan }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
