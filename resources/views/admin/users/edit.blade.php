@extends('layouts.admin')

@section('page-head')
  Edit user <span class="badge badge-secondary">{{$user->name}}</span>
@stop
@section('content')
  <div class="col-lg-3">
      <img src="{{$user->photo ? $user->photo->file : '/images/user.png'}}" alt="" class="img-responsive img-rounded">
      @include('includes.form_error')
    </div>
  <div class="col-lg-9">
    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
    <div class="row">
    <div class="form-group col-md-12">
        {!! Form::label('name', 'Name:', ['class'=>'control-form']) !!}
        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Your full name']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::label('email', 'Email:', ['class'=>'control-form']) !!}
        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'A valid email address']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::label('role_id', 'Role:', ['class'=>'control-form']) !!}
        {!! Form::select('role_id', [''=>'Choose a role'] + $roles, $user->role_id, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::label('is_active', 'Status:', ['class'=>'control-form']) !!}
        {!! Form::select('is_active', array(0=>'Not Active', 1=>'Active'), null, ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::label('password', 'Password:', ['class'=>'control-form']) !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::label('photo_id', 'Photo:', ['class'=>'control-form']) !!}
        {!! Form::file('photo_id', ['class'=>'form-control-file']) !!}

      </div>
    </div>
    <div class="row">
      <div class="form-group col-md-12">
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
      </div>
    </div>

  {!! Form::close() !!}
  </div>
  <div class="clearfix"></div>


@stop

