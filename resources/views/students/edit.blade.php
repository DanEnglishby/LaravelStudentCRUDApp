@extends('layouts.master')

@section('pageTitle', 'Edit Students Details')

@section('content')

    <h1 class="display-6">Edit Student</h1>

    <hr/>
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['StudentController@update', $student->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('first_name', 'First Name')}}
        {{Form::text('first_name', $student->first_name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('last_name', 'Last Name')}}
        {{Form::text('last_name', $student->last_name, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('age', 'Age')}}
        {{Form::number('age', $student->age, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $student->email, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}

@endsection
