@extends('layouts.user')

@section('title')
Post new item
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">POST A NEW ITEM</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    @include('partials.message-block')
                    <form action="{{ route('postnewitem') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="">Please Choose</option>
                                        <option value="lost">Lost</option>
                                        <option value="found">Found</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" accept="image/*" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" id="location" placeholder="Location" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" rows="10" class="form-control" placeholder="Description"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success bigbutton" type="submit">
                                <i class="icon fa-check"></i> Post Item
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
