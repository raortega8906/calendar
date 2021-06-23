@if (session('status'))
    <div class="alert alert-default-success">
        {{ session('status') }}
    </div>
@elseif (session('status-error'))
    <div class="alert alert-default-danger">
        {{ session('status-error') }}
    </div>
@endif
