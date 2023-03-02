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
        <thead>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>address</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
                <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->email}}</td>
                <td>{{$d->address}}</td>
                <td>
                    <a href={{ "medit/". $d->id}} class="btn btn-primary">edit</a>
                    <a href={{ "mdelete/". $d->id}} class="btn btn-danger">delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>