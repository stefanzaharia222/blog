@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Crează un nou articol</h1>
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titlu</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Introduceți titlul articolului">
                </div>
                <div class="form-group">
                    <label for="content">{{ __('content') }}</label>
                    <textarea class="form-control" id="content" name="content" placeholder="Introduceți conținutul articolului"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crează articolul</button>
            </form>
        </div>
    </div>
</div>
@endsection