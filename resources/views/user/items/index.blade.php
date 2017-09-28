@extends('layouts.user')

@section('title')
Items Posted by you
@endsection

@section('body')

<div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body">
            <h1 class="page-title">Items Posted by {{ Auth::user()->name }}</h1>
            <hr>
            @if (count($postedItems) == 0)
                <h1 class="page-title font-weight-100">YOU ARE YET TO POST ANY ITEM</h1>
                <br>
                <a href="{{ route('newitem') }}" class="btn btn-primary bigbutton">
                    <i class="icon fa-plus"></i> Post one now
                </a>
            @else
                <div class="table-responsive">
                    @include('partials.message-block')
                    <table class="table table-hover">
                        <thead>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>Posted on</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            <?php $counter = 1; ?>
                            @foreach ($postedItems as $item)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="" class="btn btn-info">
                                            Edit
                                        </a>
                                        <a href="{{ route('delete_item', ['id' => $item->id]) }}" id="deleteItem" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php $counter++; ?>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $postedItems->links() }}
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
