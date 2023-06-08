<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use App\Http\Requests\StoreidentitasRequest;
use App\Http\Requests\UpdateidentitasRequest;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $identitas = Identitas::all();
        return view('identitas.index', compact('identitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('identitas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreidentitasRequest $request)
    {
        $identitas = new Identitas;
        $identitas->nama_identitas = $request->input('nama_identitas');
        $identitas->nip = $request->input('nip');
        $identitas->jabatan = $request->input('jabatan');
        $identitas->unit_eselon = $request->input('unit_eselon');
        $identitas->satuan_kerja = $request->input('satuan_kerja');
        $identitas->jenjang_pendidikan = $request->input('jenjang_pendidikan');
        $identitas->jurusan = $request->input('jurusan');
        $identitas->save();

        return redirect()->route('identitas.index')->with('success', 'Data identitas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(identitas $identitas,$id)
    {
        $identitas = Identitas::find($id);
        return view('identitas.show', compact('identitas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(identitas $identitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateidentitasRequest $request, identitas $identitas,$id)
    {
        $identitas = Identitas::find($id);
        $identitas->nama_identitas = $request->input('nama_identitas');
        $identitas->nip = $request->input('nip');
        $identitas->jabatan = $request->input('jabatan');
        $identitas->unit_eselon = $request->input('unit_eselon');
        $identitas->satuan_kerja = $request->input('satuan_kerja');
        $identitas->jenjang_pendidikan = $request->input('jenjang_pendidikan');
        $identitas->jurusan = $request->input('jurusan');
        $identitas->save();

        return redirect()->route('identitas.index')->with('success', 'Data identitas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(identitas $identitas,$id)
    {
        $identitas = Identitas::find($id);
        $identitas->delete();

        return redirect()->route('identitas.index')->with('success', 'Data identitas berhasil dihapus');
    }
}
