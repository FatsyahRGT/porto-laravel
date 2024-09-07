@extends('layout_2.app')
@section('title', 'Tambah Keahlian')

@section('content')
    <form action="{{ route('keahlian.store') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="ahli">Keahlian</label>
            <input type="text" class="form-control" id="ahli" name="ahli">
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
