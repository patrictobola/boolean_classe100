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
                            <form action="{{ route('students.restore', $student) }}" method="Post"
                                class="restore-form ms-2" data-name="{{ $student->first_name }}">
                                @method('patch')
                                @csrf
                                <button type="submit" class="btn btn-success">Rispristina</button>
                            </form>
                            <form action="{{ route('students.destroy', $student) }}" method="Post" class="delete-form ms-2"
                                data-name="{{ $student->first_name }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Elimina definitivamente</button>
                            </form>
                        </td>
                    </tr>
                    @include('includes.modal')
                @endforeach

            </tbody>
        </table>
        <div class="container d-flex justify-content-between">
            <a class="btn btn-danger" href="#">Elimina tutto</a>
            <form action="{{ route('students.restoreAll') }}" method="Post" class="restore-all-form ms-2">
                @method('put')
                @csrf
                <button type="submit" class="btn btn-success">Ripristina tutto</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/form-delete.js')
    @vite('resources/js/form-restore.js')
    @vite('resources/js/form-restore-all.js')
@endsection
