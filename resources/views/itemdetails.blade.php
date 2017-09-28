@extends('layouts.app')

@section('body')

<header class="page-header">
    <div class="background-image-holder parallax-background">
        <img class="background-image" alt="Background Image" src="{{ asset('storage/lost-and-found/'. $item->image) }}">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-white space-bottom-medium" style="font-weight: bolder; font-size: 70px">
                    {{ $item->title }}
                </h1>
                <h1 class="text-white space-bottom-medium">
                    <i class="fa fa-map-marker"></i> {{ $item->location }}
                </h1>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <div class="panel-body">
                        <h2><strong>Title:</strong> {{ $item->title }}</h2>
                        <h3><i class="fa fa-map-marker"></i> <strong>Location:</strong> {{ $item->location }}</h3>
                        <hr>
                        <img src="{{ asset('storage/lost-and-found/'. $item->image) }}" alt="{{ $item->title }}"
                        class="img-responsive" width="500px">
                        <br><br>
                        <div style="border-left: 5px outset lightgray; padding: 20px">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
