<?php

namespace App\Http\Controllers;
use App\Models\Bprog;

use Illuminate\Http\Request;

class BprogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bprogs = Bprog::all();
        return view('bprog.index', compact('bprogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bprog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Bprog::create([
            'nama_bahasa_pemrograman' => $request->nama_bahasa_pemrograman,
        ]);
       
        return redirect()->route('bprog.index')->with('success', 'data berhasil di tambah');
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
        $bprog = Bprog::findOrFail($id);
        return view('bprog.edit', compact('bprog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nama_bahasa_pemrograman' => 'required',     
        ]);
        $bprog = Bprog::findOrFail($id);
        $bprog->update($request->all());

        return redirect()->route('bprog.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bprog = Bprog::findOrFail($id);
        $bprog->delete();

        return redirect()->route('bprog.index')->with('success', 'data berhasil di hapus');
    }
}
