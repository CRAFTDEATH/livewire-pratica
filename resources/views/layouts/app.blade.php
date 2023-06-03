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
        <div class="row">
            <div class="col">
                <x-header></x-header>
            </div>
        </div>
        <div class="row">
            @if(Auth::check())
                <div class="col-2">
                    <x-sidebar></x-sidebar>
                </div>
            @endif
            @if(Auth::check())
                <div class="col-10">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
                @else
                <div class="col-12">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            @endif
        </div>
    </div>
    @livewireScripts
    <script src="https://kit.fontawesome.com/149e6ebcdd.js" crossorigin="anonymous"></script>
</body>

</html>
