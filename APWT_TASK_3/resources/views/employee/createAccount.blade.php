@extends('layouts.signInLayout')
@section('title', 'Create Account')
@section('contant')
    <h4>New here?</h4>
    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
    <form class="pt-3" action="{{route('employeeCreate')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <input class="form-control form-control-lg"  name="username" placeholder="Username">
            @error('username')
                <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <input class="form-control form-control-lg" name="name"  placeholder="name">
            @error('name')
                <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control form-control-lg"  name="email"  placeholder="email">
            @error('email')
                <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
            @error('password')
             <span class="font-weight-light text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                CREATE
            </button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="{{route('employeeSignIn')}}" class="text-primary">Login</a>
        </div>
    </form>
@endsection