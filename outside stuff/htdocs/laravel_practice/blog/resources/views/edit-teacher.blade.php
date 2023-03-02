<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add-student.css">
</head>
<body>
    <div class="main">
       
        <form method="post" action="{{route('teacher.update',$teacher->id)}}">
        <h1>Teacher</h1>
            @csrf
            
            <input type="text" name="name" value="{{$teacher->name}}" required>
            <input type="text" name="phone" value="{{$teacher->phone}}" required>
            <input type="text" name="email" value="{{$teacher->email}}"  required>
            <input type="password" name="password" value="{{$teacher->password}}" required>
            <input type="submit" value="SUBMIT" name="reg" >
        </form>
    </div>
</body>
</html>