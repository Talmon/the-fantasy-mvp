@extends('layouts.app')


@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Editing</th>
      <th scope="col">Deleting</th>
    </tr>
  </thead>
  <tbody>
    
      
      @foreach($categories as $category)
      <tr>
      <th scope="row"> {{ $category->id }} </th>
      <td> {{ $category->name }} </td>
      <td>  <a class="btn btn-info" href="{{ route('category.edit', ['id' => $category->id] ) }}"> Edit </a>   </td>
      <td> <a class="btn btn-danger" href="{{ route('category.delete', [ 'id' => $category->id ]) }}"> Delete </a>  </td>
      </tr>
      @endforeach
    
    <tr>
      <td></td>
      
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
  </tbody>
</table>

@stop