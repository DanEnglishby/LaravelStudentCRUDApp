@extends('layouts.master')

@section('pageTitle', 'Students Index')

@section('content')
    <h1 class="display-6">Students</h1>
    <a href="{{route('students.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($students as $student)
            <tr>
                <td>{{$student->first_name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->email}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('students.show', $student->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('students.edit', $student->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1">Delete User</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection
