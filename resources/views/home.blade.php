@extends('layouts.user')

@section('title')
Dashboard
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            @include('partials.message-block')
            <h1 class="page-title font-weight-100">Dashboard</h1>
            <hr>
        </div>
    </div>
</div>

@endsection
