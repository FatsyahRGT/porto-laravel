<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keahlian;

class KeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keahlians = Keahlian::all();
        return view('keahlian.index', compact('keahlians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keahlian::create([
            'ahli' => $request->ahli,
        ]);
       
        return redirect()->route('keahlian.index')->with('success', 'data berhasil di tambah');
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
        $keahlian = Keahlian::findOrFail($id);
        return view('keahlian.edit', compact('keahlian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'ahli' => 'required',     
        ]);
        $keahlian = Keahlian::findOrFail($id);
        $keahlian->update($request->all());

        return redirect()->route('keahlian.index')->with('success', 'data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keahlian = Keahlian::findOrFail($id);
        $keahlian->delete();

        return redirect()->route('keahlian.index')->with('success', 'data berhasil di hapus');
    }
}
