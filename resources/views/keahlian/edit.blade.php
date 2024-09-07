@extends('layout_2.app')
@section('title', 'Tambah keahlian')

@section('content')
    <form action="{{ route('keahlian.update', $keahlian->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ahli">keahlian</label>
            <input type="text" class="form-control" value="{{ $keahlian->ahli }}" id="ahli" name="ahli">
        </div>
        
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </div>
    </form>
@endsection
