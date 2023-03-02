<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    .main{
        height:100vh;
        width:100%;
    }
    a{
        text-decoration:none;
        color:gray;
    }

    .login{
        height: 90vh;
    }
</style>
<body>
    <div class="main">
        <div class="container-fluid d-flex justify-content-center align-items-center border-bottom border-1">
        <div class="col-md-5">
            <p class="display-5 ">Food <span style="color:red;">Fiesta</span></p>
        </div>
        <div class="col-md-5 d-flex justify-content-around ">
            <a href="" >Home</a>
            <a href="">About us</a>
            <a href="">Menu</a>
            <a href="{{route('user.login')}}">Login</a>
         </div>
        </div>


       <div class="container-fluid  ">
            <div class="row login justify-content-center align-items-center ">
                <div class="col-5 border border-gray p-5">
                    <form action="{{route('login.user')}}" method="post">
                        @csrf
                        <div class="row gap-3">
                            <h1 class="display-2 text-center">Log <span style="color:red;">In</span></h1>
                            <input type="text" name="email" id="" class="form-control p-3" placeholder="Username/email">
                            <input type="password" name="password" id="" class="form-control p-3" placeholder="Password">
                            <input type="submit" value="login" class="btn btn-primary btn-md">
                        </div>
                    </form>
                    <p class="lead mt-4 mb-0 text-center ">
                        if you don't have any account, please, enter
                        <a href="{{route('user.register')}}">create an account</a>
                    </p>
                </div>
            </div>
       </div>

       



    </div>
</body>
</html>