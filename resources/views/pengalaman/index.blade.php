@extends('layout_2.app')
@section('title', 'Pengalaman')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('pengalaman/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Durasi Kerja</th>
                    <th>Posisi</th>
                    <th>Alamat</th>
                    <th>Perusahaan</th>
                    <th>Deskripsi Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($pengalamans as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->durasi }}</td>
                        <td>{{ $user->posisi }}</td>
                        <td>{{ $user->alamat }}</td>
                        <td>{{ $user->perusahaan }}</td>
                        <td>{{ $user->deskripsi }}</td>
                        <td>
                            <a href="{{ route('pengalaman.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form class="d-inline" action="{{ route('pengalaman.destroy', $user->id) }}"
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
