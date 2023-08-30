@extends('layouts.main')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">edit student</a>
            </div>
            <p><strong>first name:</strong> {{ $student->first_name }}</p>
            <p><strong>last name:</strong> {{ $student->last_name }}</p>
            <p><strong>birth date:</strong> {{ $student->birth }}</p>
            <p><strong>city:</strong> {{ $student->city }}</p>
        </div>
    </div>
@endsection
