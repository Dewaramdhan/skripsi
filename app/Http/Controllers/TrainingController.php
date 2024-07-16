<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
        return view('trainings.index', compact('trainings'));
    }

    public function create()
    {
        $penduduks = Penduduk::all();
        return view('trainings.create', compact('penduduks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'ada_tempat_berteduh_tetap' => 'nullable|boolean',
            'krt_bekerja' => 'nullable|boolean',
            'pernah_khawatir_makan' => 'nullable|boolean',
            'pengeluaran_pangan_lebih_dari_70' => 'nullable|boolean',
            'ada_pengeluaran_pakaian_dalam_setahun' => 'nullable|boolean',
            'lantai_terbuat_dari_tanah' => 'nullable|boolean',
            'dinding_terbuat_dari_bambu_kawat_kayu' => 'nullable|boolean',
            'punya_fasilitas_buang_air_sendiri' => 'nullable|boolean',
            'listrik_pln_450_watt' => 'nullable|boolean',
            'rekomendasi_kelayakan' => 'nullable|string',
        ]);

        Training::create($request->all());

        return redirect()->route('trainings.index')
                         ->with('success', 'Data training berhasil ditambahkan.');
    }

    public function show(Training $training)
    {
        return view('trainings.show', compact('training'));
    }

    public function edit(Training $training)
    {
        $penduduks = Penduduk::all();
        return view('trainings.edit', compact('training', 'penduduks'));
    }

    public function update(Request $request, Training $training)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'ada_tempat_berteduh_tetap' => 'nullable|boolean',
            'krt_bekerja' => 'nullable|boolean',
            'pernah_khawatir_makan' => 'nullable|boolean',
            'pengeluaran_pangan_lebih_dari_70' => 'nullable|boolean',
            'ada_pengeluaran_pakaian_dalam_setahun' => 'nullable|boolean',
            'lantai_terbuat_dari_tanah' => 'nullable|boolean',
            'dinding_terbuat_dari_bambu_kawat_kayu' => 'nullable|boolean',
            'punya_fasilitas_buang_air_sendiri' => 'nullable|boolean',
            'listrik_pln_450_watt' => 'nullable|boolean',
            'rekomendasi_kelayakan' => 'nullable|string',
        ]);

        $training->update($request->all());

        return redirect()->route('trainings.index')
                         ->with('success', 'Data training berhasil diperbarui.');
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->route('trainings.index')
                         ->with('success', 'Data training berhasil dihapus.');
    }
}
