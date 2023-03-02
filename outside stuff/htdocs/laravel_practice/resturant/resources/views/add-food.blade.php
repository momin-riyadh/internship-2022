


@extends('adminProfile')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form{
        margin: 0 30%;
        row-gap: 25px;

    }
    
    input{
        padding: 0.5rem;
        border-radius: 50px;
        border:none;
        background-color: skyblue;
        color: white;
        text-align: center;
    }

    select{
        padding: 0.5rem;
        border-radius: 50px;
        color: white;
        text-align: center;
       
    }
  
</style>

   

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

 <div class="add-food" class="" style="margin-left:12%;height:100%;width:100%;">


  <p class="text-center display-6 mt-4">add food</p>


    <form action="{{route('food.store')}}" class="d-flex flex-column justify-content-center" enctype="multipart/form-data" method="post" >
        @csrf
        <select name="category" class="border border-1 bg-info">
          @foreach($cat as $c)
          <option value={{$c->category}}>{{$c->category}}</option>
          @endforeach
        </select>
        

        <input type="text" name="food">
        
        <input type="file" name="image" id="">
        <input type="number" name="price" id="">
        <input type="submit" value="save">
    </form>
       
 </div>


   
    
@endsection
@endsection


</body>
</html>




