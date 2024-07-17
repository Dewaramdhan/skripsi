<!-- resources/views/jenis_bantuans/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Jenis Bantuan</h2>

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

    <form action="{{ route('jenis_bantuans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-label">Nama Jenis Bantuan:</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Jenis Bantuan" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endsection
