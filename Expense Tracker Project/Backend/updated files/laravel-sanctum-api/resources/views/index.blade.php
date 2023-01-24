<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/admin.css">
    <title>Admin Panel</title>
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
                <form method="POST" action="/api/logout">
                    @csrf
                    <button>Log Out</button>
                </form>
{{--                <h3><a href="#">Log Out</a></h3>--}}
            </div>
            <div class="nav-items-username">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    User
{{--                    {{auth()->user()->username}}--}}
{{--                    {{var_dump(Auth::user())}}--}}
                </h3>
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

