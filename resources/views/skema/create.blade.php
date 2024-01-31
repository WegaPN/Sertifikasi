@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Skema Sertifikasi Baru</h1>
    <form method="POST" action="{{ route('skema.store') }}">
        @csrf
        <div class="form-group">
            <label for="Kd_skema">Kode Skema:</label>
            <input type="text" class="form-control" name="Kd_skema" required>
        </div>
        <div class="form-group">
            <label for="Nm_skema">Nama Skema:</label>
            <input type="text" class="form-control" name="Nm_skema" required>
        </div>
        <div class="form-group">
            <label for="Jenis">Jenis:</label>
            <input type="text" class="form-control" name="Jenis" required>
        </div>
        <div class="form-group">
            <label for="Jml_unit">Jumlah Unit:</label>
            <input type="number" class="form-control" name="Jml_unit" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
