<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <div id="app">
        <x-navbar></x-navbar>
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @auth
                            @if (Route::currentRouteName() != 'home')
                                <x-bread-crumb></x-bread-crumb>
                            @endif
                        @endauth
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://kit.fontawesome.com/149e6ebcdd.js" crossorigin="anonymous"></script>

    @livewireScripts

</body>

</html>
