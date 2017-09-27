@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ ucfirst($error) }}
        </div>
    @endforeach
@endif

@if(Session::has('success'))
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('err'))
    <div class="alert alert-danger fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('err') }}
    </div>
@endif
