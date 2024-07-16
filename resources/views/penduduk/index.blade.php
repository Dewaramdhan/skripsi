@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Penduduk</h2>
    <a class="btn btn-success" href="{{ route('penduduk.create') }}">Tambah Penduduk</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>No KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Jenis Bantuan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($penduduks as $penduduk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $penduduk->nokk }}</td>
            <td>{{ $penduduk->nik }}</td>
            <td>{{ $penduduk->nama }}</td>
            <td>{{ $penduduk->alamat }}</td>
            <td>{{ $penduduk->rt }}</td>
            <td>{{ $penduduk->rw }}</td>
            <td>{{ $penduduk->jenis_bantuan }}</td> <!-- Tambahkan kolom untuk jenis bantuan -->
            <td>
                <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('penduduk.show', $penduduk->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('penduduk.edit', $penduduk->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
