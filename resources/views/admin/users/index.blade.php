@extends('layouts.admin')



@section('page-head')
  Users
@stop


@section('content')

  <div>
      @if(Session::has('deleted_user') || Session::has('created_user') || Session::has('updated_user'))
      <div class="errors">
        <div class="alert alert-success" role="alert">
          <strong>success</strong> 
        

            @if(Session::has('deleted_user'))

            {{session('deleted_user')}}

            @elseif(Session::has('created_user'))

            {{session('created_user')}}

            @elseif(Session::has('updated_user'))

            {{session('updated_user')}}

            @endif
      
        
        </div>
      </div>
      @endif
  </div>


  @if($users)
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>


    @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img src="{{$user->photo ? $user->photo->file : '/images/user.png'}}" alt="{{$user->name}}" height="50" style="border-radius:50%; width:50px"></td>
      <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role ? $user->role->name : "User has no role"}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
  @endif
@endsection
