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
       
        <form method="post" action="{{route('student.store')}}">
        <h1>Student Register</h1>
            @csrf
            
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="studentId" placeholder="StudentId" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="password" required>
            <input type="submit" value="SUBMIT" name="reg" >
        </form>
    </div>
</body>
</html>