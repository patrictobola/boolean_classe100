@extends('layouts.main')

@section('header')
    @include('includes.header')
@endsection

@section('main')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Buttons</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><a href="#" class="btn btn-primary">Create</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
