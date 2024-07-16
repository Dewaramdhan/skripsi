@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Data Training</h2>
    <a class="btn btn-success mb-3" href="{{ route('trainings.create') }}">Tambah Data Training</a>

    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif

    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Ada Tempat Berteduh Tetap</th>
                    <th scope="col">KRT Bekerja</th>
                    <th scope="col">Pernah Khawatir Makan</th>
                    <th scope="col">Pengeluaran Pangan Lebih dari 70%</th>
                    <th scope="col">Ada Pengeluaran Pakaian Dalam Setahun</th>
                    <th scope="col">Lantai Terbuat dari Tanah</th>
                    <th scope="col">Dinding Terbuat dari Bambu/Kawat/Kayu</th>
                    <th scope="col">Fasilitas Buang Air Sendiri</th>
                    <th scope="col">Penerangan Listrik PLN 450 Watt</th>
                    <th scope="col">Rekomendasi Kelayakan</th>
                    <th scope="col" width="180px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainings as $training)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $training->penduduk->nama }}</td>
                    <td>{{ $training->ada_tempat_berteduh_tetap ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->krt_bekerja ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->pernah_khawatir_makan ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->pengeluaran_pangan_lebih_dari_70 ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->ada_pengeluaran_pakaian_dalam_setahun ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->lantai_terbuat_dari_tanah ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->dinding_terbuat_dari_bambu_kawat_kayu ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->punya_fasilitas_buang_air_sendiri ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->listrik_pln_450_watt ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ $training->rekomendasi_kelayakan }}</td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-info btn-sm mr-1" href="{{ route('trainings.show', $training->id) }}">Show</a>
                            <a class="btn btn-primary btn-sm mr-1" href="{{ route('trainings.edit', $training->id) }}">Edit</a>
                            <form action="{{ route('trainings.destroy', $training->id) }}" method="POST">
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
