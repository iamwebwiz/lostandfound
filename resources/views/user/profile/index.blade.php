@extends('layouts.user')

@section('title')
LostAndFound | My Profile
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title font-weight-100">My Profile</h1>
            <hr>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                    @if (is_null($user->profilepic))
                        <img src="{{ asset('assets/img/oaunoticeboard.jpg') }}" width="80%" class="img-thumbnail">
                    @else
                        <img src="{{ asset('storage/users/'. $user->profilepic) }}" width="80%" class="img-thumbnail">
                    @endif
                    <br><br>
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
                    <h2 class="font-weight-100">{{ $user->name }}</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h3 class="font-weight-100"><i class="icon fa-map-marker"></i> {{ $user->location }}</h3>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h3 class="font-weight-100"><i class="icon fa-mobile"></i> {{ $user->phone }}</h3>
                        </div>
                    </div>
                    <hr>
                    <h3 class="font-weight-100">Joined: {{ $user->created_at->diffForHumans() }}</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h4 class="font-weight-100">Lost: {{ $lostItems }}</h4>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h4 class="font-weight-100">Found: {{ $foundItems }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
