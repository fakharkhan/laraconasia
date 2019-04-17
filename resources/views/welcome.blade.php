<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracon Asia</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                            @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Laracon Asia
                    </div>

                </div>
            </div>
        </div>


        {{--<script src="/js/manifest.js"></script>--}}
        {{--<script src="/js/vendor.js"></script>--}}
        <script src="{{ mix('js/app.js') }}"></script>

    </body>
</html>
