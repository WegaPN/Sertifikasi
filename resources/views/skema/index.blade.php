@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Skema Sertifikasi</h1>
    <div class="mb-3">
        <form action="{{ route('skema.search') }}" method="GET" class="form-inline ml-3">
            <div class="form-group mr-2">
                <input type="text" name="search" class="form-control" placeholder="Cari skema">
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Skema</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah Unit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skemas as $skema)
                <tr>
                    <td>{{ $skema->Kd_skema }}</td>
                    <td>{{ $skema->Nm_skema }}</td>
                    <td>{{ $skema->Jenis }}</td>
                    <td>{{ $skema->Jml_unit }}</td>
                    <td>
                        <a href="{{ route('skema.edit', $skema->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('skema.destroy', $skema->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus skema ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
