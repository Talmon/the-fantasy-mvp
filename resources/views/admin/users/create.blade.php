@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Create a New User
    </div>
    <div class="card-body">
        @include('layouts.errors')

        <form action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
             <label for="email">Email</label>
             <input type="text" name="email" class="form-control">
        </div>


       <div class="text-center">
       <button class="text-center btn btn-success">Create User</button>
       </div> 
        
        </form>        
    </div>
</div>
@stop