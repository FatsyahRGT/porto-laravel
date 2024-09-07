@extends('layout_2.app')
@section('title', 'Project')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('project/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Project</th>
                    <th>Deskripsi Project</th>
                    <th>Foto Project</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($projects as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->nama_project }}</td>
                        <td>{{ $user->deskripsi_project }}</td>
                        <td><img src="{{asset('/storage/image/'. $user->foto_project )}}" alt=""></td>
                        <td>
                            <a href="{{ route('project.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form class="d-inline" action="{{ route('project.destroy', $user->id) }}"
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
