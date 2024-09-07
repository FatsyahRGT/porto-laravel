@extends('layout_2.app')
@section('title', 'pendidikan')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('pendidikan/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Durasi Pendidikan</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat Sekolah</th>
                    <th>Tingkat</th>
                    <th>Jurusan Sekolah</th>
                    <th>Deskripsi Pendidikan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pendidikans as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->durasi_pendidikan }}</td>
                        {{-- disini belum selesai --}}
                        <td>{{ $user->nama_sekolah }}</td>
                        <td>{{ $user->alamat_sekolah }}</td>
                        <td>{{ $user->tingkat }}</td>
                        <td>{{ $user->jurusan_sekolah }}</td>
                        <td>{{ $user->deskripsi_pendidikan }}</td>
                        <td>
                            <a href="{{ route('pendidikan.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form class="d-inline" action="{{ route('pendidikan.destroy', $user->id) }}"
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
