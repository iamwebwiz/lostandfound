@extends('layouts.app')

@section('title')
Register
@endsection

@section('body')

<section class="no-pad login-page fullscreen-element">

    <div class="background-image-holder">
        <img class="background-image" alt="Poster Image For Mobiles" src="{{ asset('assets/img/hero6.jpg') }}">
    </div>

    <div class="container align-vertical">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                <h1 class="text-white">Register for full access</h1>
                <div class="photo-form-wrapper clearfix">
                    @include('partials.message-block')
                    <form action="/registerUser" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input class="form-name" name="name" type="text" value="{{ Request::old('name') }}" placeholder="Full Name">
                        <input class="form-name" name="username" type="text" value="{{ Request::old('username') }}" placeholder="Username">
                        <input class="form-name" name="phone" type="tel" value="{{ Request::old('phone') }}" placeholder="Phone number">
                        <input class="form-name" name="location" type="text" value="{{ Request::old('location') }}" placeholder="Location">
                        <input class="form-email" name="email" type="email" value="{{ Request::old('email') }}" placeholder="Email Address">
                        <input class="form-password" name="password" type="password" placeholder="Password">
                        <div class="form-group">
                            <label class="btn btn-info btn-filled">
                                <i class="fa fa-photo"></i> Upload Photo
                                <input type="file" name="profilepic" accept="image/*" style="display: none;">
                            </label>
                        </div>

                        <button class="btn btn-danger login-btn btn-filled" type="submit">
                            Register
                        </button>
                    </form>
                </div><!--end of photo form wrapper-->
                <a href="/login" class="text-white">Have An Account? Sign In ➞</a>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</section>

@endsection
