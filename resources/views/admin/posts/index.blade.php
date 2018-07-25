@extends('layouts.app')

@section('content')
  
  @if(count($posts) > 0)   

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Editing</th>
      <th scope="col">Deleting</th>
    </tr>
  </thead>

  @foreach($posts as $post)
  <tbody>
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ str_limit($post->content, 50) }}</td>
      <td>  <img src="{{ $post->featured }}" class="w-75" height="150px" alt="">  </td>
      <td> <a class="btn btn-info btn-lg" href="{{ route('post.edit', ['id' => $post->id]) }}"> Edit </a> </td>
      <td> <a class="btn btn-danger btn-lg" href="{{ route('post.delete', [ 'id' => $post->id ]) }}"> Delete </a> </td>
    </tr>
  </tbody>
 @endforeach
 </table>



 @else
  
<p class="lead mt-5">There are no posts in the database,click <a href="{{ route('post.create') }}"> here </a>  to create a new post. </p>

 @endif



@stop