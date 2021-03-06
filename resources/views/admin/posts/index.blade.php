@extends('layouts.admin')

@section('page-head')
    Posts
@endsection

@section('content')

<table class="table table-striped">
    <thead>
        <th>Id</th>
        <th>User</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Updated at</th>
    </thead>
    <tbody>
        @if ($posts)

            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'uncategorized'}}</td>
                    <td><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" height="50"></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    
                </tr>
            @endforeach
            
        @endif
    </tbody>
</table>
    
@endsection
