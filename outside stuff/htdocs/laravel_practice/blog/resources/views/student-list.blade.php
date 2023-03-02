<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Student ID</th>
            <th>Email</th>
            <th>Action</th>
            
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->studentId}}</td>
                <td>{{$student->email}}</td>
                <td >  
                 <a href={{ "edit/". $student->id}} role="button" class="btn btn-success">edit</a>
                 <a href={{ "delete/". $student->id}} role="button" class="btn btn-danger">delete</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>