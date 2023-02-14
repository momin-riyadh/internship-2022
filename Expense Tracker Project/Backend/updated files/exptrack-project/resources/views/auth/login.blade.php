<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">


{{--    <link rel="stylesheet" href="resources/views/auth/login.css">--}}
{{--    <title>Log In</title>--}}


</head>

<body>
<div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="https://picsum.photos/150" alt="">
        </div>
        <div class="sign-up-button">
            @guest
                @if (Route::has('register'))
                    <p>Don't have an account?</p>
                    <a role="button" href="{{ route('register') }}">Sign Up</a>
                @endif
            @else
                <p>Welcome {{ Auth::user()->name }}</p>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest

        </div>

    </div>
    <div class="main">
        <h1>Welcome Back</h1>
        <div class="input">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" id="email">{{ __('Email Address') }}<a href=#>Forgot?</a></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password" id="password" >{{ __('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="sign-up-button">
                    <button type="submit">{{ __('Login') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

