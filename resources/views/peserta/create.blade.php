@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Formulir Tambah Peserta</h1>

    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Kd_skema">Kode Skema:</label>
            <select name="Kd_skema" class="form-control">
                @foreach($skemas as $skema)
                    <option value="{{ $skema->Kd_skema }}">{{ $skema->Kd_skema }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="Nm_peserta">Nama Peserta:</label>
            <input type="text" class="form-control" id="Nm_peserta" name="Nm_peserta">
        </div>
        <div class="form-group">
            <label for="Jekel">Jenis Kelamin:</label>
            <select name="Jekel" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat:</label>
            <input type="text" class="form-control" id="Alamat" name="Alamat">
        </div>
        <div class="form-group">
            <label for="No_hp">Nomor HP:</label>
            <input type="text" class="form-control" id="No_hp" name="No_hp">
        </div>
        <!-- Tambahkan field lain sesuai kebutuhan -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
