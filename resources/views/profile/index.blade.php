@extends('layout_2.app')
@section('title', 'Data User')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('profile/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($profiles as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->deskripsi }}</td>
                        <td>{{ $user->jurusan }}</td>
                        <td><img src="{{asset('/storage/image/'. $user->foto )}}" alt=""></td>
                        <td>
                            <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            {{-- <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                            <form class="d-inline" action="{{ route('profile.destroy', $user->id) }}" onsubmit="return confirm('apakah ingin dihapus??')" method="post">
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
