<!-- resources/views/penduduks/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Penduduk</h2>

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

    <form action="{{ route('penduduk.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nokk" class="form-label">No KK:</label>
                    <input type="text" name="nokk" id="nokk" class="form-control" placeholder="No KK" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nik" class="form-label">NIK:</label>
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" style="height:150px" name="alamat" id="alamat" placeholder="Alamat" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rt" class="form-label">RT:</label>
                    <input type="text" name="rt" id="rt" class="form-control" placeholder="RT" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="rw" class="form-label">RW:</label>
                    <input type="text" name="rw" id="rw" class="form-control" placeholder="RW" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_bantuan" class="form-label">Jenis Bantuan:</label>
                    <select name="jenis_bantuan[]" id="jenis_bantuan" class="form-control" multiple>
                        @foreach ($jenisBantuans as $jenisBantuan)
                        <option value="{{ $jenisBantuan->nama }}">{{ $jenisBantuan->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
