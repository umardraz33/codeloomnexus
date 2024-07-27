@if (session('success'))
    <div class="alert alert-success">
        @if ($showUpdate)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            {{ session('success') }}
        @endif

    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        @if ($showUpdate)
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            </button>
            {{ session('error') }}
        @endif
    </div>
@endif
