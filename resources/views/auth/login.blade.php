@extends('layouts.app')

@section('title')
Login
@endsection

@section('body')

<div class="main-container">
    <section class="no-pad login-page fullscreen-element">

        <div class="background-image-holder">
            <img class="background-image" alt="Poster Image For Mobiles" src="{{ asset('assets/img/hero6.jpg') }}">
        </div>

        <div class="container align-vertical">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    <h1 class="text-white">Login to continue</h1>
                    <div class="photo-form-wrapper clearfix">
                        <form method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <input class="form-email" name="email" type="email" placeholder="Email Address">
                            <input class="form-password" name="password" type="password" placeholder="Password">
                            <input class="login-btn btn-filled" type="submit" value="Login">
                        </form>
                    </div><!--end of photo form wrapper-->
                    <a href="/register" class="text-white">Create an account ➞</a><br>
                    <a href="{{ route('password.request') }}" class="text-white">I've forgotten my password</a>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>

@endsection
