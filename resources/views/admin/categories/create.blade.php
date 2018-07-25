@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Create a New Category
    </div>
    <div class="card-body">
        @if($errors)
            @foreach($errors->all() as $error)
                <ul class="list-group">
                    <li class="list-group-item text-danger"> {{ $error }} </li>
                </ul>
            @endforeach
        @endif


        <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            
            <div class="text-center">
            <button class="text-center btn btn-success">Add Category</button>
            </div> 
        
        </form>        
    </div>
</div>
@stop