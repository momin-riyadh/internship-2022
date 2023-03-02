<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

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
        <table border = "1">
            <tr>
                <td>ID</td>
                <td>Head Code</td>
                <td>Title</td>
                <td>Date</td>
            </tr>
            @foreach($account_heads as $account_heads)
                <tr>
                    <td>{{$account_heads -> id}}</td>
                    <td>{{$account_heads -> head_code}}</td>
                    <td>{{$account_heads -> title}}</td>
                    <td>{{$account_heads -> created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>

</html>
