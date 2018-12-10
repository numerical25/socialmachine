@extends('cms::layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
            Dashboard
    </div>
    <div class="card-body">
        <h5 class="card-title">Information</h5>
        <p class="card-text">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            You are logged in!
        </p>
    </div>
</div>
@endsection
