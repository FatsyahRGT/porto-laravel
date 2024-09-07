@extends('layout_2.app')
@section('title', 'Tambah Profile')

@section('content')
    <form action="{{ route('profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="{{ $profile->nama }}" id="nama" name="nama">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" value="{{ $profile->deskripsi }}" id="deskripsi" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" value="{{ $profile->jurusan }}" id="jurusan" name="jurusan">
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </div>
    </form>
@endsection
