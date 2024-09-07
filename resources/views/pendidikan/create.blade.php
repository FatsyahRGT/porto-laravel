@extends('layout_2.app')
@section('title', 'Tambah pendidikan')

@section('content')
    <form action="{{ route('pendidikan.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="durasi_pendidikan">Durasi Pendidikan</label>
            <input type="text" class="form-control" id="durasi_pendidikan" name="durasi_pendidikan">
        </div>
        <div class="form-group">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah">
        </div>
        <div class="form-group">
            <label for="alamat_sekolah">Alamat Sekolah</label>
            <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah">
        </div>
        <div class="form-group">
            <label for="tingkat">tingkat</label>
            <input type="text" class="form-control" id="tingkat" name="tingkat">
        </div>
        <div class="form-group">
            <label for="jurusan_sekolah">jurusan</label>
            <input type="text" class="form-control" id="jurusan_sekolah" name="jurusan_sekolah">
        </div>
        <div class="form-group">
            <label for="deskripsi_pendidikan">Deskripsi Pendidikan</label>
            <input type="text" class="form-control" id="deskripsi_pendidikan" name="deskripsi_pendidikan">
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
