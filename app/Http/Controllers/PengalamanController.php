<?php

namespace App\Http\Controllers;
use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengalamans = Pengalaman::all();
        return view('pengalaman.index', compact('pengalamans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengalaman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengalaman::create([
            'durasi' => $request->durasi,
            'posisi' => $request->posisi,
            'alamat' => $request->alamat,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi
        ]);
       
        return redirect()->route('pengalaman.index')->with('success', 'data berhasil di tambah');
       
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
        $pengalaman = Pengalaman::findOrFail($id);
        return view('pengalaman.edit', compact('pengalaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'durasi' => 'required',
            'posisi' => 'required',
            'alamat' => 'required',
            'perusahaan' =>  'required',
            'deskripsi' => 'required'
        ]);
        $pengalaman = Pengalaman::findOrFail($id);
        $pengalaman->update($request->all());

        return redirect()->route('pengalaman.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengalaman = Pengalaman::findOrFail($id);
        $pengalaman->delete();

        return redirect()->route('pengalaman.index')->with('success', 'data berhasil di hapus');
    }
}
