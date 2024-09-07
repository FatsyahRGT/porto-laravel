<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
      $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required|string',
        'jurusan' => 'required|string',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $path = $image->store('public/image');
        $name = basename($path);
    }

    $profile = Profile::create([
        'foto'=>$name,
        'nama'=>$request->nama,
        'jurusan'=>$request->jurusan,
        'deskripsi'=>$request->deskripsi
    ]); // Create a new Profile instance with the validated data
    return redirect()->route('profile.index')->with('success', 'data berhasil di tambah');
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
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
   /**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required|string',
        'jurusan' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $profile = Profile::findOrFail($id);

    if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $path = $image->store('public/image');
        $name = basename($path);
        $profile->foto = $name;
    }

    $profile->nama = $request->nama;
    $profile->jurusan = $request->jurusan;
    $profile->deskripsi = $request->deskripsi;

    $profile->save();

    return redirect()->route('profile.index')->with('success', 'data berhasil di edit');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();

        return redirect()->route('profile.index')->with('success', 'data berhasil di hapus');
    }
}
