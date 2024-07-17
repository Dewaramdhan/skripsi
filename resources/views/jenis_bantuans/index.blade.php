@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Jenis Bantuan</h2>
    <a class="btn btn-success mb-3" href="{{ route('jenis_bantuans.create') }}">Tambah Jenis Bantuan</a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-3">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col" width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jenisBantuans as $jenisBantuan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jenisBantuan->nama }}</td>
                    <td>
                        <form action="{{ route('jenis_bantuans.destroy', $jenisBantuan->id) }}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{ route('jenis_bantuans.edit', $jenisBantuan->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
