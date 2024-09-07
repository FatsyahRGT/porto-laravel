<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'foto_project' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_project' => 'required|string',
            'deskripsi_project' => 'required|string',
        ]);

        if ($request->hasFile('foto_project')) {
            $image = $request->file('foto_project');
            $path = $image->store('public/image');
            $name = basename($path);

        }

        $project = Project::create([
            'foto_project' => $name,
            'nama_project' => $request->nama_project,
            'deskripsi_project' => $request->deskripsi_project,

        ]); // Simpan data ke database

        return redirect()->route('project.index')->with('success', 'data berhasil di tambah');
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
        $project = Project::findOrFail($id);
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_project' => 'required',
            'deskripsi_project' => 'required|string',

        ]);
        $profile = Project::findOrFail($id);
        $profile->update($request->all());

        return redirect()->route('project.index')->with('success', 'data berhasil di edit');


    $project->update($request->all()); // Simpan data ke database

    return redirect()->route('project.index')->with('success', 'data berhasil di edit');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('project.index')->with('success', 'data berhasil di hapus');
    }
}
