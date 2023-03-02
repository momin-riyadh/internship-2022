


@extends('adminProfile')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


   

<body>
@section('main')
@section('top-bar')
@parent
@endsection

@section('content')
@parent
@section('left-sidebar')
@parent
@endsection
@section('child-content')

 <div class="content" class="" style="margin-left:12%;height:100%;width:100%;">



<table class="table  m-5">

    <thead class="border border-top bg-danger">
        <tr>
        <th>id</th>
        <th>Category</th>
        <th>Food</th>
        <td>Image</td>
        <th>Action</th>
        </tr>
    </thead>
    <tbody class="border border-top  bg-light">
       @foreach($data as $s)
       <tr>
           <td >{{$s->id}}</td>
           <td >{{$s->category}}</td>
           <td >{{$s->food}}</td>
           <td><img src="{{url('food-image',$s->image)}}" style="height:100px;width:100px;" alt=""></td>
          
           <td> <a href={{ "mdelete/". $s->id}} class="btn btn-danger">DELETE</a>
           <a href="" class="btn btn-success">EDIT</a>
        </td>
       </tr>
       @endforeach
    </tbody>
</table>

       
 </div>


   
    
@endsection
@endsection


</body>
</html>




