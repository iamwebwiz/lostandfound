@extends('layouts.app')

@section('title')
Register
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
                    <h1 class="text-white">Register for full access</h1>
                    <div class="photo-form-wrapper clearfix">
                        <form action="/registerUser" method="post">
                            {{ csrf_field() }}
                            <input class="form-name" name="name" type="text" placeholder="Full Name">
                            <input class="form-name" name="username" type="text" placeholder="Username">
                            <input class="form-email" name="email" type="email" placeholder="Email Address">
                            <input class="form-password" name="password" type="password" placeholder="Password">

                            <Button class="btn btn-danger login-btn btn-filled" type="submit">Register</Button>
                        </form>
                    </div><!--end of photo form wrapper-->
                    <a href="/login" class="text-white">Have An Account? Sign In ➞</a>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>

@endsection
