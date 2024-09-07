@extends('layout_2.app')
@section('title', 'Tambah Bahasa Pemrograman')

@section('content')
    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_project">Project</label>
            <input type="text" class="form-control" value="{{ $project->nama_project }}" id="nama_project" name="nama_project">
        </div>
        <div class="form-group">
            <label for="deskripsi_project">Deskripsi Project</label>
            <input type="text" class="form-control" value="{{ $project->deskripsi_project }}" id="deskripsi_project" name="deskripsi_project">
        </div>
        <div class="form-group">
            <label for="foto_project">Foto Project</label>
            <input type="text" class="form-control" value="{{ $project->foto_project }}" id="foto_project" name="foto_project">
        </div>
        
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </div>
    </form>
@endsection
