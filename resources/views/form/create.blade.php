@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Membuat Form Peserta dan Skema</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header mx-auto<">
                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users mr-2"><path d="M17 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0zm-5-8a9 9 0 0 0-9 9c0 5.5 9 13 9 13s9-7.5 9-13a9 9 0 0 0-9-9z"></path></svg> Form Peserta</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('peserta.create') }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus mr-2" viewBox="0 0 16 16"><path d="M5 1a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v4.5a.5.5 0 0 0 1 0V1a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h4.5a.5.5 0 0 0 0-1H7a2 2 0 0 1-2-2V1z"/><path fill-rule="evenodd" d="M15.5 11a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5zM8 5a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H8.5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H8.5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/></svg> Buat Form Peserta</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard mr-2"><path d="M8 6H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M8 6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2M8 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2m-6 4v6m-2-2h6"></path></svg> Form Skema</h2>
                </div>
                <div class="card-body">
                    <a href="{{ route('skema.create') }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus mr-2" viewBox="0 0 16 16"><path d="M5 1a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v4.5a.5.5 0 0 0 1 0V1a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h4.5a.5.5 0 0 0 0-1H7a2 2 0 0 1-2-2V1z"/><path fill-rule="evenodd" d="M15.5 11a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5zM8 5a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H8.5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H8.5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/></svg> Buat Form Skema</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
