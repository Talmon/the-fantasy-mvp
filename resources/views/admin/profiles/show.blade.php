@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body">
            @include('layouts.errors')

            <form action="{{ route('user.profile.update', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="password" value="Change Password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">About</label>
                    <textarea type="text" name="about" value="{{ $user->profile->about  }}" cols="20" rows="10" class="form-control"> </textarea>
                </div>

                <div class="form-group">
                    <label for="name">Facebook</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name">Youtube</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                </div>


                <div class="form-group">
                    <label for="featured">Avatar</label> <br>
                    <img src="{{ asset( $user->profile->avatar) }}" class="rounded-circle" width="150px" height="150px" alt="{{ $user->name }}">
                    <input type="file" name="avatar" value=" 'fdsfsdf' " class="form-control">
                </div>

                <div class="text-center">
                    <button class="text-center btn btn-success">Edit Profile</button>
                </div>

            </form>
        </div>
    </div>
@stop
