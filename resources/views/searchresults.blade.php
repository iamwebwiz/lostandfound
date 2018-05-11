@extends('layouts.app')

@section('body')

<header class="page-header">
    <div class="background-image-holder parallax-background">
        <img class="background-image" alt="Background Image" src="{{ asset('assets/img/logo-big.jpg') }}">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1 class="text-white space-bottom-medium" style="font-weight: bolder; font-size: 70px">
                    Search Results
                </h1>
                <h1 class="text-white space-bottom-medium">
                    {{-- <i class="fa fa-map-marker"></i> {{ ucfirst($item->location) }} --}}
                </h1>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</header>

<section>

    <div class="container">

        @include('partials.search')
        <hr>

        <div class="row">
            @if (count($items) < 1)
                <h3 class="text-center text-info">No result found for this query</h3>
            @else
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
            @endif
        </div>
        {{ $items->links() }}

    </div>

</section>

@stop
