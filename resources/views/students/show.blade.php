@extends('layouts.master')

@section('pageTitle', 'Students Details')

@section('content')
    <h1 class="display-6">Student Details</h1>

    <hr/>

    <dl>
        <dt>First Name</dt>
        <dd>{{$student->first_name}}</dd>

        <dt>Last Name</dt>
        <dd>{{$student->last_name}}</dd>

        <dt>Age</dt>
        <dd>{{$student->age}}</dd>

        <dt>Email</dt>
        <dd>{{$student->email}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('students.edit', $student->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
@endsection
