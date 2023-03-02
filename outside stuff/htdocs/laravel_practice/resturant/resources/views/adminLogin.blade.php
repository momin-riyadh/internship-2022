<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/adminLogin.css ">
</head>
<style>
    *{
        margin:0;
        padding: 0;
    }
    .main{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

form{
    max-width: 600px;
    width: 100%;
    height:auto;
    display: flex;
    justify-content: center;
    flex-direction: column;
    row-gap: 20px;
    padding: 4rem;
    border: 1px solid skyblue;
}

input{
    padding: 1rem;
    border-radius: 50px;
    border:none;
    background-color: skyblue;
    
}



</style>
<body>
    <div class="main">
       
        <form action="{{route('admin.login')}}" method="post">
            @csrf
        <p class="display-4 text-center">Admin Login</p>
            <input type="text" name="email" id="">
            <input type="password" name="password" id="">
            <input type="submit" value="login">
    </form>
    </div>
</body>
</html>