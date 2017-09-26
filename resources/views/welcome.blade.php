@extends('layouts.app')

@section('body')

<header class="page-header">
    <div class="background-image-holder parallax-background">
        <img class="background-image" alt="Background Image" src="{{ asset('assets/img/hero20.jpg') }}">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                {{-- <img alt="logo" class="logo" src="{{ asset('assets/img/logo-light.png') }}"> --}}
                <h1 class="text-white space-bottom-medium" style="font-weight: bolder; font-size: 70px">
                    Lost And Found
                </h1>
                <h1 class="text-white space-bottom-medium">
                    Find Lost Items With Ease
                </h1>
                <a target="_blank" href="blog.html" class="btn btn-primary btn-white">Start here</a>
                <a href="login.html" class="btn btn-primary btn-filled">Sign In</a>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</header>

@endsection
