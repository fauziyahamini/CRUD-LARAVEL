@extends('template')
@section('siswa')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Siswa</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('siswa.create') }}" class="btn btn-primary mt-3">Tambah Data</a>
    {{-- <a href="{{ route('siswa.create')}}" class="btn btn-primary">Tambah Data Dengan Route</a> --}}
            {{-- <h5 class="card-title">Data siswa</h5> --}}
            <table class="table">
                <tbody>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nama Sekolah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tr>
                        @foreach ($data3 as $item)
                        <td>{{$item['id']}}</td>
                        <td>{{$item['nis']}}</td>
                        <td>{{$item['nama_siswa']}}</td>
                        <td>{{$item['alamat']}}</td>
                        <td>{{$item->sekolah->nama_sekolah}}</td>
                        <td>
                            <a href="/delete/{{ $item->id }}" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                            <a href=" {{ route('siswa.edit', $item->id) }}" class="btn btn-success"><i class="fas fa-pen"></i>Edit</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>

  @endsection