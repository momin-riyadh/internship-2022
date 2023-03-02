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
<div class="container">
    <div class="nav">
        <div class="logo">
            <img src="https://picsum.photos/80" alt="">
        </div>
        <div class="nav-items">
            <div class="nav-items-logout">
                <h3><a href="createacchead">Create</a></h3>
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
    <div class="main">
        <div class="sidebar">
            <div class="sidebar-components">
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">User profile</a></li>
                    <li><a href="#">Messages</a></li>
                    <li><a href="#">Transactions</a></li>
                    <li><a href="#">Expenditure</a></li>
                    <li><a href="#">Income</a></li>
                    <li><a href="#">My Wallet</a></li>
                    <li><a href="#">Reports</a></li>
                </ul>
            </div>
            <div class="sidebar-components">
                <ul>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="sidebar-components">
                <ul>
                    <li><a href="#">Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="main-middle">
            <div class="total">
                <div class="total-components">
                    <h4>Total Balance</h4>
                    <p>$12346</p>
                    <p>up %</p>
                </div>
                <div class="total-components">
                    <h4>Total Expense</h4>
                    <p>$12346</p>
                    <p>up %</p>
                </div>
                <div class="total-components">
                    <h4>Total Savings</h4>
                    <p>$12346</p>
                    <p>up %</p>
                </div>
            </div>
            <div class="trend-graph">
                trend graph
            </div>
            <div class="transactions">
                <div class="transactions-component">
                    income-expense bar chart
                </div>
                <div class="transactions-component">
                    latest transactions
                </div>
            </div>
        </div>
        <div class="profile-analytics">
            <div class="profile-card"></div>
        </div>
    </div>
</div>
</body>
</html>

