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
    <link href="{{ asset('assets/css/createacchead.css') }}" rel="stylesheet">

</head>

<body>
<div>
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="https://picsum.photos/80" alt="">
            </div>
            <div class="nav-items">
                <div class="nav-items-logout">
                    <h3><a href="#">Create</a></h3>
                </div>
                <div class="nav-items-logout">
                    <h3><a href="#">Transactions</a></h3>
                </div>
                <div class="nav-items-logout">
                    @guest
                        {{--                {{route('login')}}--}}
                    @else
                        Welcome {{ Auth::user()->name }}

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
        </div>
    </div>
    <div class="main">
        <div class="header">
            <h1>Create Account Head</h1>
        </div>


        <form method="POST" action="{{ route('create-account-head') }}">
            @csrf
            <div class="input">
                <div class="input-title">
                    <label>Title:</label>
                    <input id="title" list="title-list" class="form-control @error('title') is-invalid @enderror" name="title" required>
                    <datalist id="title-list">
                        <option value="Utility">
                        <option value="Rent">
                        <option value="Stationary">
                    </datalist>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="input-parent">
                    <label>Parent:</label>
                    <input id="parent" list="parent-list" class="form-control @error('head_code') is-invalid @enderror" name="head_code" required>
                    <datalist id="parent-list">
                        <option value="Utility">
                        <option value="Rent">
                        <option value="Stationary">
                    </datalist>

                    @error('head_code')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            <div class="save-button">
                <button type="submit">Save</button>
            </div>


        </form>


    </div>
</div>
</body>
</html>
