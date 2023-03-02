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
    .content{
      display: flex;
      justify-content: center;
     
    }

    form{
        max-width: 600px;
        width: 100%;
        margin-top: 50px;
        display: flex;
        
        padding: 2rem;
    }

    input{
        border: none;
       
       padding: 1rem;
      
      
    }

    input[type=text]{
      flex:1.5;
      background-color: skyblue;
      border-bottom-left-radius: 50px;
       border-top-left-radius: 50px;
    }

    input[type=submit]{
      flex:.5;
       border-bottom-right-radius: 50px;
       border-top-right-radius: 50px;
    }
   p{
       display:block;
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

 <div class="content" class="" style="margin-left:12%;height:100%;width:100%;">

       <form action="{{route('category.store')}}" method="post">
        @csrf
           <input type="text" name="category" required>
           <input type="submit" value="save">
            
            
            
          
       </form>
       
 </div>


   
    
@endsection
@endsection


</body>
</html>




