@extends('layouts.app')

@section('body')

<style>
    .fixedHeight {
        min-height: 450px;
    }

    .image_overflow {
        height: 300px;
        overflow: hidden;
    }
</style>

<header class="page-header">
    <div class="background-image-holder parallax-background">
        <img class="background-image" alt="Background Image" src="{{ asset('assets/img/board-4.jpeg') }}">
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
                @if (Auth::guest())
                    <a href="{{ url('register') }}" class="btn btn-primary btn-white">Start here</a>
                    <a href="{{ url('login') }}" class="btn btn-primary btn-filled">Sign In</a>
                @else
                    <a href="{{ url('home') }}" class="btn btn-primary btn-filled">Dashboard</a>
                @endif
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</header>

<section>
    <div class="container">
        @if (count($items) == 0)
            <h1 class="text-center text-primary">No items have been posted at this time!</h1>
        @else
            <h1 class="text-center">Recently Placed Items</h1>
            <hr>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="panel panel-default fixedHeight">
                            <div class="panel-heading image_overflow">
                                <img src="{{ asset('storage/lost-and-found/'. $item->image) }}">
                            </div>
                            <div class="panel-body">
                                <h3>{{ ucfirst($item->title) }}</h3>
                                <hr>
                                <h4><i class="fa fa-map-marker"></i> {{ ucfirst($item->location) }}</h4>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h4>{{ $item->created_at->diffForHumans() }}</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <a href="{{ url('/items/'.$item->id.'/details') }}" class="btn btn-primary">
                                            Preview
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
