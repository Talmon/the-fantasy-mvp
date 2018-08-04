@extends('layouts.app')

@section('content')

  @if(count($users) > 0)

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Avatar</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Permissions</th>
      <th scope="col">Editing</th>
      <th scope="col">Deleting</th>
    </tr>
  </thead>

  @foreach($users as $user)
  <tbody>
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>  <img src="{{ asset( $user->profile->avatar) }}" class="rounded-circle" width="150px" height="150px" alt="{{ $user->name }}">  </td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
      @if($user->admin)
      <a class="btn btn-warning btn" href="{{ route('user.not.admin', ['id' => $user->id]) }}"> Remove Permissions </a>
      @else
      <a class="btn btn-success btn" href="{{ route('user.admin', ['id' => $user->id]) }}"> Make Admin </a>
      @endif
      </td>
      <td> <a class="btn btn-info btn" href="{{ route('user.profile', ['id' => $user->id]) }}"> Edit </a> </td>
      <td> <a class="btn btn-danger btn" href="{{ route('user.delete', [ 'id' => $user->id ]) }}"> Delete </a> </td>
    </tr>
  </tbody>
 @endforeach
 </table>



 @else

<p class="lead mt-5">There are no users in the database,click <a href="{{ route('user.create') }}"> here </a>  to create a new user. </p>

 @endif



@stop
