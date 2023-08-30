@extends('layouts.main')

@section('header')
    @include('includes.header')
@endsection

@section('main')
    <div class="container mt-5">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-6">

                    <label for="first_name" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Inserisci nome"
                        value="{{ $student->first_name }}">
                </div>
                <div class="col-6">

                    <label for="last_name" class="form-label">Cognome:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        placeholder="Inserisci cognome" value="{{ $student->last_name }}">
                </div>
                <div class="col-6">

                    <label for="city" class="form-label">Città</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Inserisci città"
                        value="{{ $student->city }}">
                </div>
                <div class="col-6">

                    <label for="birthday" class="form-label">Data di nascita</label>
                    <input type="date" class="form-control" id="birthday" name="birth"
                        placeholder="Inserisci data di nascita" value="{{ $student->birth }}">
                </div>
            </div>
            <button class="btn btn-success m-3">Modifica</button>
        </form>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('home') }}">Torna alla Home</a>
        </div>
    </div>
@endsection
