<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>




</style>

<body>
    @section('main')
    <div class="main">
        @section('top-bar')
        <div class="top-bar border-bottom border-1 d-flex justify-content-around">
            <div class="left-logo">
                <p class="display-4">
                    Food <span style="color:red;"> Fiesta</span>
                </p>
            </div>
            <div class="list d-flex justify-content-around align-items-center ">
                <a class="text-decoration-none" href="">Home</a>
                <a class="text-decoration-none" href="">About us</a>
                <a class="text-decoration-none" href="">Menu</a>
                <a class="text-decoration-none" href="">login as {{session('data')['email']}} </a>

            </div>
        </div>
        @show

        @section('content')
        <div class="content">
            @section('left-sidebar')
            <div class="left-sidebar">
                <button class="accordion">Menu</button>
                <div class="panel">
                    <li>
                        <a class="text-decoration-none" href="">Today special</a>
                    </li>
                    <li>
                        <a class="text-decoration-none" href="">All menu</a>
                    </li>
                </div>



                <button class="accordion">Tracking Order</button>
                <div class="panel">
                    <li>
                        <a class="text-decoration-none" href="">Order status</a>
                    </li>

                </div>




                <button class="accordion">Book Seat</button>
                <div class="panel">
                    <li>
                        <a class="text-decoration-none" href="">book table</a>
                    </li>
                    <li>
                        <a class="text-decoration-none" href="">Booked Tables</a>
                    </li>
                </div>

                <button class="accordion">Add to cart</button>
                <div class="panel">
                    <li>
                        <a class="text-decoration-none" href="">cart list</a>
                    </li>
                    <li>
                        <a class="text-decoration-none" href="">order history</a>
                    </li>

                </div>

                <button class="accordion">Settings</button>
                <div class="panel">
                    <li>
                        <a class="text-decoration-none" href=/settings>Order status</a>
                    </li>

                </div>

                <div class="accordion">
                    <a class="text-decoration-none btn btn-primary" href="{{route('user.logout')}}">logout</a>
                </div>
            </div>
            @show

            @section('child-content')
            <div class="child-content">
                @yield('child-content')


            </div>
            @show
        </div>
        @show




    </div>
    @show

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>



</body>

</html>