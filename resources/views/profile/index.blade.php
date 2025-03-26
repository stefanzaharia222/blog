@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ __('profile') }}</h1>
            <p>{{ __('name') }}: {{ auth()->user()->name }}</p>
            <p>{{ __('email') }}: {{ auth()->user()->email }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('edit_profile') }}</a>
        </div>
    </div>
</div>
@endsection