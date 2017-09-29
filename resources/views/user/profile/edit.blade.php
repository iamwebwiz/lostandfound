@extends('layouts.user')

@section('title')
Edit my profile
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <h1 class="font-weight-100">My Profile</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    @include('partials.message-block')
                    <form action="/profile/{{ $user->id }}/edit" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Full name</label>
                            <input type="text" name="name" placeholder="Fullname" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username" value="{{ $user->username }}"
                            class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" value="{{ $user->email }}"
                            class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location" placeholder="Location" class="form-control" value="{{ $user->location }}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="Phone" class="form-control" value="{{ $user->phone }}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success bigbutton">
                                <i class="icon wb-check"></i> Update Profile
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</div>

@endsection
