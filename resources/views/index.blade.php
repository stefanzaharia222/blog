@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Articole</div>
                    <div class="card-body">
                        @foreach($articles as $article)
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $article->title }}</h5>
                                    {{ $article->content }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection