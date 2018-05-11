<form action="{{ route('search_items') }}" method="get">
    <div class="form-group">
        <div class="input-group">
            <input type="search" name="query" class="form-control input-lg" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-primary btn-lg" type="button">Go!</button>
            </span>
        </div><!-- /input-group -->
    </div>
</form>
