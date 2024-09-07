@extends('layout_2.app')
@section('title', 'keahlian')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('keahlian/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keahlian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($keahlians as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->ahli }}</td>
                        
                        <td>
                            <a href="{{ route('keahlian.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form class="d-inline" action="{{ route('keahlian.destroy', $user->id) }}"
                                onsubmit="return confirm('apakah ingin dihapus??')" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
