@extends('layouts.user')

@section('title')
Edit Item
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title font-weight-100">Edit Item Details</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    @include('partials.message-block')
                    <form action="/items/{{ $item->id }}/edit" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Title" value="{{ $item->title }}" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="">Please Choose</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category }}">
                                                {{ ucfirst($category) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" accept="image/*" class="form-control">
                                </div>
                            </div> --}}
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="">Select location</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country }}">{{ $country->country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" id="nigerianLocations">
                                    <label>Location</label>
                                    <select name="location" class="form-control">
                                        <option value="">Select location</option>
                                        @foreach ($nigerianLocations as $location)
                                            <option value="{{ $location }}">{{ $location }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" id="otherLocations">
                                    <label>Location</label>
                                    <input type="text" name="location" id="otherLocation" placeholder="Location"
                                    value="{{ $item->location }}" class="form-control">
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="10" class="form-control" placeholder="Description">
                                {{ $item->description }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success bigbutton" type="submit">
                                <i class="icon fa-check"></i> Make Changes
                            </button>
                        </div>

                    </form>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/oaunoticeboard.jpg') }}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: 'textarea',
        plugins : 'advlist autolink link image lists charmap print preview'
    });
</script>

@endsection
