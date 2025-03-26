@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ __('article')}} {{ $article->title }}</h1>
            <p>{{ __('content') }}: {{ $article->content }}</p>
            <p> {{ __('created_at')}}: {{ $article->created_at }}</p>
            <p>{{ __('updated_at')}}: {{ $article->updated_at }}</p>
            <a href="{{ route('articles.index') }}" class="btn btn-primary">{{ __('back_articles') }}</a>
            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">{{ __('edit_article') }}</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('delete_article') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection