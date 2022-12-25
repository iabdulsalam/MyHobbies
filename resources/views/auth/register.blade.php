@extends('layouts.master')
@section('content')
    <main class="form-signin w-100 m-auto">
        @error('name')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('email')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        @error('password_confirmation')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <form class="text-center" action="{{ route('register') }}" method="POST">
            @csrf
            <img class="mb-4" src="https://getbootstrap.com/docs/5.2/assets/brand/bootstrap-logo.svg" alt=""
                width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating">
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('name')}}">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old('password')}}">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"" id="floatingPassword"
                    placeholder="Password" value="{{old('password_confirmation')}}">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign up</button>
        </form>
    </main>
@endsection
