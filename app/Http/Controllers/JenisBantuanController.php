<?php

// app/Http/Controllers/JenisBantuanController.php

namespace App\Http\Controllers;

use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class JenisBantuanController extends Controller
{
    public function index()
    {
        $jenisBantuans = JenisBantuan::all();
        return view('jenis_bantuans.index', compact('jenisBantuans'));
    }

    public function create()
    {
        return view('jenis_bantuans.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama' => 'required']);
        JenisBantuan::create($request->all());
        return redirect()->route('jenis_bantuans.index')->with('success', 'Jenis Bantuan created successfully.');
    }

    public function edit(JenisBantuan $jenisBantuan)
    {
        return view('jenis_bantuans.edit', compact('jenisBantuan'));
    }

    public function update(Request $request, JenisBantuan $jenisBantuan)
    {
        $request->validate(['nama' => 'required']);
        $jenisBantuan->update($request->all());
        return redirect()->route('jenis_bantuans.index')->with('success', 'Jenis Bantuan updated successfully.');
    }

    public function destroy(JenisBantuan $jenisBantuan)
    {
        $jenisBantuan->delete();
        return redirect()->route('jenis_bantuans.index')->with('success', 'Jenis Bantuan deleted successfully.');
    }
}
