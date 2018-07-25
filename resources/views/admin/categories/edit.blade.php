@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Category: {{ $category->name }}
    </div>
    <div class="card-body">

        @include('layouts.errors')

        <form action="{{ route('category.update', ['id' =>  $category->id ]) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
             <label for="category">Category</label>
             <input type="text" name="name" value=" {{ $category->name }} " class="form-control">
        </div>

       <div class="text-center">
       <button class="text-center btn btn-success" type="submit">Update Category</button>
       </div> 
        
        </form>        
    </div>
</div>
@stop