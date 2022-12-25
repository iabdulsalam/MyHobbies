@extends('layouts.master')
@section('content')
    <div class="bg-dark text-secondary px-4 py-5 text-center">
        <div class="py-5">
            <h1 class="display-5 fw-bold text-white">Hobbies</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}"><button type="button"
                                        class="btn btn-outline-primary btn-lg me-sm-3 fw-bold">Login</button></a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"> <button type="button"
                                            class="btn btn-outline-light btn-lg px-4">Register</button></a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
