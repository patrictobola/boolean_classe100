@extends('layouts.main')

@section('main')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <table class="table table-bordered">
                    <h1 class="text-center">Student page</h1>
                    <tbody>
                        <tr>
                            <td><strong>First Name:</strong></td>
                            <td>{{ $student->first_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Last Name:</strong></td>
                            <td>{{ $student->last_name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Birth Date:</strong></td>
                            <td>{{ $student->birth }}</td>
                        </tr>
                        <tr>
                            <td><strong>City:</strong></td>
                            <td>{{ $student->city }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit Student</a>
                    <form action="{{ route('students.destroy', $student) }}" method="post" class="delete-form"
                        data-name="{{ $student->id }}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/form-delete.js')
@endsection
