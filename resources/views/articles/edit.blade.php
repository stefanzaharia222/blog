@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ __('edit_article')}} {{ $article->title }}</h1>
            <form action="{{ route('articles.update', $article->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">{{ __('title') }}</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" placeholder="Introduceți titlul articolului">
                </div>
                <div class="form-group">
                    <label for="content">{{ __('content') }}</label>
                    <textarea class="form-control" id="content" name="content" placeholder="Introduceți conținutul articolului">{{ $article->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">{{ __('save_changes') }}</button>
                <a href="{{ route('articles.index') }}" class="btn btn-secondary">{{ __('back_articles') }}</a>
            </form>
        </div>
    </div>
</div>
@endsection