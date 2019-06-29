@extends('layouts.admin')

@section('page-head')
    Create Post
@endsection

@section('content')

<div class="row">
    @include('includes.form_error')
</div>

<div class="row">

{!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class'=>'control-form']) !!}
        {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Insert title here']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:', ['class'=>'control-form']) !!}
        {!! Form::select('category_id',  array(' ' => 'Choose categroy'),null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Image:', ['class'=>'control-form']) !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body:', ['class'=>'control-form']) !!}
        {!! Form::textarea('body', null, ['class'=>'form-control', 'style'=>'resize:none']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
    </div>

    


{!! Form::close() !!}

</div>


@endsection