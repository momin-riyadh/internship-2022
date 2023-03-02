
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add-student.css">
</head>

<style>
    .main{
        width:100%;
        height:100vh;
        display: flex;
        justify-content:center;
        align-items:center;
    }

    form{
        max-width:500px;
        width:100%;
        height:auto;
        padding:2rem;
        display:flex;
        flex-direction:column;
        row-gap:20px;

        border: 5px solid blue;
    }
    input{
            padding: 0.8rem;
        }
</style>
<body>
    <div class="main">
      
        <form method="post" action="{{route('student.update',$student->id)}}">
        <h1>Edit Student</h1>
            @csrf
            
            <input type="text" name="name" value="{{$student->name}}" required>
            <input type="text" name="studentId" value="{{$student->studentId}}" required>
            <input type="text" name="email" value="{{$student->email}}" required>
            <input type="password" name="password" value="{{$student->password}}" required>
            <input type="submit" value="SUBMIT" name="reg" >
        </form>
        
    </div>
</body>
</html>