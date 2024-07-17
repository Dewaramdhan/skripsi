<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('penduduk.index', compact('penduduks'));
    }

    public function create()
    {
        $jenisBantuans = JenisBantuan::all();
        return view('penduduk.create', compact('jenisBantuans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nokk' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'jenis_bantuan' => 'nullable|array',
        ]);

        $penduduk = Penduduk::create($request->except('jenis_bantuan'));
        $penduduk->jenis_bantuan = json_encode($request->jenis_bantuan);
        $penduduk->save();

        return redirect()->route('penduduk.index')
            ->with('success', 'Penduduk created successfully.');
    }

    public function show(Penduduk $penduduk)
    {
        return view('penduduk.show', compact('penduduk'));
    }

    public function edit(Penduduk $penduduk)
    {
        $jenisBantuans = JenisBantuan::all();
        return view('penduduk.edit', compact('penduduk', 'jenisBantuans'));
    }

    public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
            'nokk' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'jenis_bantuan' => 'nullable|array',
        ]);

        $penduduk->update($request->except('jenis_bantuan'));
        $penduduk->jenis_bantuan = json_encode($request->jenis_bantuan);
        $penduduk->save();

        return redirect()->route('penduduk.index')
            ->with('success', 'Penduduk updated successfully.');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();

        return redirect()->route('penduduk.index')
            ->with('success', 'Penduduk deleted successfully.');
    }
}
