@extends('layout_2.app')
@section('title', 'Tambah Project')

@section('content')
    <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_project">Project</label>
            <input type="text" class="form-control" id="nama_project" name="nama_project">
        </div>
        <div class="form-group">
            <label for="deskripsi_project">Deskripsi Project</label>
            <input type="text" class="form-control" id="deskripsi_project" name="deskripsi_project">
        </div>
        <div class="form-group">
            <label for="foto_project">Foto Project</label>
            <input type="file" class="form-control" id="foto_project" name="foto_project">
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
