@extends('layouts.admin')

@section('page-head')
  Create user
@stop
@section('content')
  {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('name', 'Name:', ['class'=>'control-form']) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Your full name']) !!}
      </div>
      <div class="col-md-5">
        @include('includes.form_error')
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('email', 'Email:', ['class'=>'control-form']) !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'A valid email address']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('role_id', 'Role:', ['class'=>'control-form']) !!}
        {!! Form::select('role_id', [''=>'Choose a role'] + $roles, 3, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('is_active', 'Status:', ['class'=>'control-form']) !!}
        {!! Form::select('is_active', array(0=>'Not Active', 1=>'Active'), 0, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('password', 'Password:', ['class'=>'control-form']) !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::label('photo_id', 'Photo:', ['class'=>'control-form']) !!}
        {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}

      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-5">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
      </div>
    </div>

  {!! Form::close() !!}


@stop
