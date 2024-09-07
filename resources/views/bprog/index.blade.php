@extends('layout_2.app')
@section('title', 'Bahasa Pemrograman')

@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ url('bprog/create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>bprog</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($bprogs as $key => $user)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $user->nama_bahasa_pemrograman }}</td>

                        <td>
                            <a href="{{ route('bprog.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form class="d-inline" action="{{ route('bprog.destroy', $user->id) }}"
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
