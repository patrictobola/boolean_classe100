@extends('layouts.main')

@section('main')
    <div class="container mt-5">
        <div class="row">
            <p><strong>first name:</strong> {{ $student->first_name }}</p>
            <p><strong>last name:</strong> {{ $student->last_name }}</p>
            <p><strong>birth date:</strong> {{ $student->birth }}</p>
            <p><strong>city:</strong> {{ $student->city }}</p>
            <div class="container d-flex justify-content-between">
                <form action="{{ route('students.destroy', $student) }}" method="Post" class="delete-form ms-2"
                    data-name="{{ $student->id }}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
                <a class="btn btn-primary" href="{{ route('home') }}">Torna alla Home</a>
                <div class="col-md-6 ">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">edit student</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @vite('resources/js/form-delete.js')
@endsection
