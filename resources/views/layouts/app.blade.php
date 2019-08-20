<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <section>

            @guest
            @else

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="text-align: center;margin-top: 300px">
                        <a class="dropdown-item" href="{{ route('logout') }}" style="font-size: 40px"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('Выйти') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
            @endguest
        </section>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
