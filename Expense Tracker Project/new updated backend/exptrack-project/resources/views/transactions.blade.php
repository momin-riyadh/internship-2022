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
                <td>Date</td>
                <td>Account Head</td>
                <td>Credit Amount</td>
                <td>Debit Amount</td>
            </tr>
            @foreach($transactions as $transactions)
                <tr>
                    <td>{{$transactions -> id}}</td>
                    <td>{{$transactions -> transaction_at}}</td>
                    <td>{{$transactions -> acc_head}}</td>
                    <td>{{$transactions -> credit}}</td>
                    <td>{{$transactions -> debit}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>

</html>
