@extends('layouts.app')

@section('content')
<div class="container align-center">
    <h1><center>Daftar Peserta Sertifikasi</h1></center>

    <div class="mb-3">
        <form action="{{ route('peserta.search') }}" method="GET" class="form-inline ml-3">
            <div class="form-group mr-2">
                <input type="text" name="search" class="form-control" placeholder="Cari peserta">
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Peserta</th>
                <th>Kode Skema</th>
                <th>Nama Peserta</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pesertas as $peserta)
            <tr>
                <td>{{ $peserta->id }}</td>
                <td>{{ $peserta->Kd_skema }}</td>
                <td>{{ $peserta->Nm_peserta }}</td>
                <td>{{ $peserta->Jekel }}</td>
                <td>{{ $peserta->Alamat }}</td>
                <td>{{ $peserta->No_hp }}</td>
                <td>
                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peserta ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $pesertas->links() }}
    </div>
</div>
@endsection
