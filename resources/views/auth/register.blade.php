@extends('layouts.app')

@section('title')
Register
@endsection

@section('body')

<section class="no-pad login-page fullscreen-element">

    <div class="background-image-holder">
        <img class="background-image" alt="Poster Image For Mobiles" src="{{ asset('assets/img/board-4.jpeg') }}">
    </div>

    <div class="container align-vertical">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center">
                <h1 class="text-white">Register for full access</h1>
                <div class="photo-form-wrapper clearfix">
                    @include('partials.message-block')
                    <form action="{{ url('registerUser') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-name" name="name" type="text" value="{{ Request::old('name') }}" placeholder="Full Name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-name" name="username" type="text" value="{{ Request::old('username') }}" placeholder="Username">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-name" name="phone" type="tel" value="{{ Request::old('phone') }}" placeholder="Phone number">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-name" name="location" type="text" value="{{ Request::old('location') }}" placeholder="Location">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <input class="form-email" name="email" type="email" value="{{ Request::old('email') }}" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input class="form-password" name="password" type="password" placeholder="Password">
                            </div>
                        </div>

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
                <a href="{{ url('login') }}" class="text-white">Have An Account? Sign In ➞</a>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</section>

@endsection
