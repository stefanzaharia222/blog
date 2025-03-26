@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard {{ __("articles") }}</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">{{ __("create_article") }}</a>
            <table class="table table-striped"  data-label="Tabela articolelor">
                <thead>
                    <tr>
                        {{-- <th>ID</th> --}}
                        <th>{{ __("title") }}</th>
                        <th>{{ __("content") }}</th>
                        <th>{{ __("actions") }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            {{-- <td data-label="ID">{{ $article->id }}</td> --}}
                            <td data-label="{{ __('title') }}">{{ $article->title }}</td>
                            <td data-label="{{ __('content') }}">{{ $article->content }}</td>
                            <td data-label="{{ __('actions') }}">
                                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">{{ __("show") }}</a>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">{{ __("edit") }}</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">{{ __("delete") }}</button>
                                </form>
                                @if($article->public)
                                    <form action="{{ route('articles.public', $article->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">{{ __("private") }}</button>
                                    </form>
                                @else
                                    <form action="{{ route('articles.public', $article->id) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-secondary">{{ __("public") }}</button>
                                    </form>
                                @endif
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection