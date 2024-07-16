@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Data Penduduk</h2>
    <a class="btn btn-success mb-3" href="{{ route('penduduk.create') }}">Tambah Penduduk</a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No KK</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Jenis Bantuan</th>
                    <th scope="col" width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduks as $penduduk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penduduk->nokk }}</td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->alamat }}</td>
                    <td>{{ $penduduk->rt }}</td>
                    <td>{{ $penduduk->rw }}</td>
                    <td>{{ $penduduk->jenis_bantuan }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-info btn-sm mr-1" href="{{ route('penduduk.show', $penduduk->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm mr-1" href="{{ route('penduduk.edit', $penduduk->id) }}">Edit</a>
                            <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
