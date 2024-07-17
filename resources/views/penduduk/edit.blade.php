<!-- resources/views/penduduks/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Penduduk</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nokk" class="form-label">No KK:</label>
                    <input type="text" name="nokk" id="nokk" class="form-control" value="{{ $penduduk->nokk }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nik" class="form-label">NIK:</label>
                    <input type="text" name="nik" id="nik" class="form-control" value="{{ $penduduk->nik }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $penduduk->nama }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" style="height:150px" name="alamat" id="alamat" required>{{ $penduduk->alamat }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rt" class="form-label">RT:</label>
                    <input type="text" name="rt" id="rt" class="form-control" value="{{ $penduduk->rt }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rw" class="form-label">RW:</label>
                    <input type="text" name="rw" id="rw" class="form-control" value="{{ $penduduk->rw }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_bantuan" class="form-label">Jenis Bantuan:</label>
                    <select name="jenis_bantuan[]" id="jenis_bantuan" class="form-control" multiple>
                        @foreach ($jenisBantuans as $jenisBantuan)
                        <option value="{{ $jenisBantuan->nama }}" {{ in_array($jenisBantuan->nama, json_decode($penduduk->jenis_bantuan, true)) ? 'selected' : '' }}>{{ $jenisBantuan->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection
