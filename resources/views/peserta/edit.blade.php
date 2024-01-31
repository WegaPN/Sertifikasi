@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Peserta Sertifikasi</h1>
    <form method="POST" action="{{ route('peserta.update', $peserta->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Nm_peserta">Nama Peserta:</label>
            <input type="text" name="Nm_peserta" class="form-control" value="{{ $peserta->Nm_peserta }}" required>
        </div>
        <div class="form-group">
            <label for="Jekel">Jenis Kelamin:</label>
            <input type="text" name="Jekel" class="form-control" value="{{ $peserta->Jekel }}" required>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <input type="text" name="Alamat" class="form-control" value="{{ $peserta->Alamat }}" required>
        </div>
        <div class="form-group">
            <label for="No_hp">Nomor HP:</label>
            <input type="text" name="No_hp" class="form-control" value="{{ $peserta->No_hp }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
