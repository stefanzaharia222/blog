<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">{{ __("home")}}<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index') }}">{{ __("articles")}}</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            @include('partials/language_switcher')
                        </div>
                    </div>
                    @guest
                        <li class="nav-item d-flex align-items-center p-1">
                            <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __("login") }}</a>
                        </li>
                        <li class="nav-item d-flex align-items-center p-1">
                            <a class="nav-link btn btn-success" href="{{ route('register') }}">{{ __("register") }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown d-flex align-items-center">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __("dashboard")}}</a>
                                <a class="dropdown-item" href="{{ route('profile.index') }}">{{ __("profile")}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __("logout") }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="GET" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    @vite(['resources/js/app.js'])

</body>
</html>