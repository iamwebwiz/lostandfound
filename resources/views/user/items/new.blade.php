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
                    <form action="" method="post">
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
                                    <label for="image">
                                        Image
                                    </label>
                                    <br>
                                    <label class="btn btn-primary">
                                        <i class="icon fa-photo"></i> Please Choose
                                        <input type="file" name="image" accept="image/*" style="display: none;">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="country" class="form-control">
                                        <option value="">Select location</option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Location</label>
                                    <select name="location" class="form-control">
                                        <option value="">Select location</option>
                                        @foreach ($nigerianLocations as $location)
                                            <option value="{{ $location }}">{{ $location }}</option>
                                        @endforeach
                                    </select>
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
