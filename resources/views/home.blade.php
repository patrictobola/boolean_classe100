@extends('layouts.main')

@section('header')
    @include('includes.header')
@endsection

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
                            <a href="#" class="btn btn-primary">Show</a>

                            <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('students.destroy', $student) }}" method="Post" class="delete-form ms-2"
                                data-name="{{ $student->id }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="container">
            <a class="btn btn-primary" href="{{ route('students.create') }}">Create new student</a>
        </div>
    </div>
@endsection
