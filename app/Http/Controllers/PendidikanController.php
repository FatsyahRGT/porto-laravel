<?php

namespace App\Http\Controllers;
use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view('pendidikan.index', compact('pendidikans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pendidikan::create([
            'durasi_pendidikan' => $request->durasi_pendidikan,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'tingkat' => $request->tingkat,
            'jurusan_sekolah' => $request->jurusan_sekolah,
            'deskripsi_pendidikan' => $request->deskripsi_pendidikan
        ]);
       
        return redirect()->route('pendidikan.index')->with('success', 'data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'durasi_pendidikan' => 'required',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'tingkat' =>  'required',
            'jurusan_sekolah' => 'required',
            'deskripsi_pendidikan' => 'required'
        ]);
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')->with('success', 'data berhasil di hapus');
    }
}
