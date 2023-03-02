<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('form.update', $data->id)}}" method="post">
        @csrf
        <input type="text" name="name"  placeholder="Name" value="{{$data->name}}">
        <input type="email" name="email" placeholder="Email Address @gmail.com" value="{{$data->email}}">
        <input type="text" name="address" placeholder="Address" value="{{$data->address}}">
        <input type="password" name="password" placeholder="password" value="{{$data->password}}" required>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>