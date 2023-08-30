@extends('layouts.main')

@section('header')
    @include('includes.header')
@endsection

@section('main')
    <div class="container mt-5">
        <div class="card">
            @if ($errors->any())
                <div class="alert alert-danger mb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-6">

                    <label for="first_name" class="form-label">Nome:</label>
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                        name="first_name" placeholder="Inserisci nome">
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">

                    <label for="last_name" class="form-label">Cognome:</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                        name="last_name" placeholder="Inserisci cognome">
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">

                    <label for="city" class="form-label">Città:</label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                        name="city" placeholder="Inserisci città">
                    @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6">

                    <label for="birthday" class="form-label @error('birth') is-invalid @enderror">Data di nascita:</label>
                    <input type="date" class="form-control" id="birthday" name="birth"
                        placeholder="Inserisci data di nascita">
                    @error('birth')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button class="btn btn-success m-3">Invia</button>
        </form>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('home') }}">Torna alla Home</a>
        </div>
    </div>
@endsection
