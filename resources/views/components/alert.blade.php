@if (session('success'))
    <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            {{ session('success') }}

    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            {{ session('error') }}
    </div>
@endif
