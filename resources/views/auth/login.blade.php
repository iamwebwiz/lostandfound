@extends('layouts.app')

@section('title')
Login
@endsection

@section('body')

<section class="no-pad login-page fullscreen-element">

    <div class="background-image-holder">
        <img class="background-image" alt="Poster Image For Mobiles" src="{{ asset('assets/img/board-4.jpeg') }}">
    </div>

    <div class="container align-vertical">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                <h1 class="text-white">Login to continue</h1>
                <div class="photo-form-wrapper clearfix">
                    @include('partials.message-block')
                    <form method="post" action="{{ url('userLogin') }}">
                        {{ csrf_field() }}
                        <input class="form-email" name="email" type="email" value="{{ Request::old('email') }}"
                        placeholder="Email Address">
                        <input class="form-password" name="password" type="password" placeholder="Password">
                        <input class="login-btn btn-filled" type="submit" value="Login">
                    </form>
                </div><!--end of photo form wrapper-->
                <a href="{{ url('register') }}" class="text-white">Create an account &rarr;</a><br>
                <a href="{{ route('password.request') }}" class="text-white">I've forgotten my password</a>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</section>

@endsection
