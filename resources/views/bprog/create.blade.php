@extends('layout_2.app')
@section('title', 'Tambah Bahasa Pemrograman')

@section('content')
    <form action="{{ route('bprog.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="nama_bahasa_pemrograman">Bahasa Pemrograman</label>
            <input type="text" class="form-control" id="nama_bahasa_pemrograman" name="nama_bahasa_pemrograman">
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
