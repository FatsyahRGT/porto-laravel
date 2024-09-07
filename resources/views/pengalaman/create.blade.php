@extends('layout_2.app')
@section('title', 'Tambah Pengalaman')

@section('content') 
    <form action="{{ route('pengalaman.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="durasi">Durasi Kerja</label>
            <input type="text" class="form-control" id="durasi" name="durasi">
        </div>
        <div class="form-group">
            <label for="posisi">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
        <div class="form-group">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Pekerjaan</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
