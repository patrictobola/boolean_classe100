@extends('layouts.main')

@section('main')
    <div class="container mt-5">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Birth</th>
                    <th scope="col">City</th>
                    <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->birth }}</td>
                        <td>{{ $student->city }}</td>

                        <td class="d-flex align-items-center justify-content-end">
                            <a href="{{ route('students.show', $student) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning ms-2">Edit</a>
                            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Delete
                            </button>
                            @include('includes.modal')

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="container">
            <a class="btn btn-danger " href="{{ route('students.trash') }}">Cestino</a>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/form-restore.js')
@endsection
