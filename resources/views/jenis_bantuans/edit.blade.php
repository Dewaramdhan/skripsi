<!-- resources/views/jenis_bantuans/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Edit Jenis Bantuan</h2>

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

    <form action="{{ route('jenis_bantuans.update', $jenisBantuan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama" class="form-label">Nama Jenis Bantuan:</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $jenisBantuan->nama }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
