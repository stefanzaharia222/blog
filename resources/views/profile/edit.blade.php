@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ __('edit_profile') }}</h1>
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">{{ __('name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" placeholder="Introduceți numele">
                </div>
                <div class="form-group">
                    <label for="email">{{ __('email') }}</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="Introduceți emailul">
                </div>
                <button type="submit" class="btn btn-primary">{{ __('save_changes') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection