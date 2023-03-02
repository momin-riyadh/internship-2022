<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<link rel="stylesheet" href="{{url('css/site.css')}}">

<body>
<div class="relative p-4">
            <nav id="navbar">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <div class="time">
         <p id="demo">
              this is a pera
            </p>
         </div>
            </nav>

            
        </div>
        
        <script>
   // alert('contact us');

    var t = new Date().getHours();
     

    switch(t){
            case 0:
                var m = new Date().getMinutes();
                if(m>30){
                    document.getElementById("navbar").style.backgroundColor="orange";   
                }
                document.getElementById("navbar").style.backgroundColor="red";
            break;
            case 1:
                document.getElementById("navbar").style.backgroundColor="green";
            break;
            case 2:
                document.getElementById("navbar").style.backgroundColor="skyblue";
            break;
            case 3:
                document.getElementById("navbar").style.backgroundColor="#83F3A1 ";
            break;
            case 4:
                document.getElementById("navbar").style.backgroundColor="#83F3EE ";
            break;
            case 5:
                document.getElementById("navbar").style.backgroundColor="#83E1F3 ";
            break;
            case 6:
                document.getElementById("navbar").style.backgroundColor="#EDDAFE ";
            break;
            case 7:
                document.getElementById("navbar").style.backgroundColor="#F2DAFE ";
            break;
            case 8:
                document.getElementById("navbar").style.backgroundColor="#FEDAF1 ";
            break;
            case 9:
                document.getElementById("navbar").style.backgroundColor="orange";
            break;
            case 10:
                document.getElementById("navbar").style.backgroundColor="#8CFACD ";
            break;
            case 11:
                document.getElementById("navbar").style.backgroundColor="#8CFA91 ";
            break;
            case 12:
                document.getElementById("navbar").style.backgroundColor="#8CA9FA ";
                var m = new Date().getMinutes();
                if(m>30){
                    document.getElementById("navbar").style.backgroundColor="orange";   
                }
            break;
            case 13:
                document.getElementById("navbar").style.backgroundColor="#8CFA9A ";
                var m = new Date().getMinutes();
                if(m>30){
                    var randomColor = Math.floor(Math.random()*16777215).toString(16);
                    document.getElementById("navbar").style.backgroundColor=randomColor;  
                }
            break;
            case 14:
                document.getElementById("navbar").style.backgroundColor="#8CFAF8  ";
                var m = new Date().getMinutes();
                if(m>30){
                    var randomColor = Math.floor(Math.random()*16777215).toString(16);
                    document.getElementById("navbar").style.backgroundColor=randomColor;    
                }
            break;
            case 15:
                document.getElementById("navbar").style.backgroundColor="#9A8CFA ";
                var m = new Date().getMinutes();
                if(m>30 ){
                    var randomColor = Math.floor(Math.random()*16777215).toString(16);
                    document.getElementById("navbar").style.backgroundColor=randomColor;   
                }
            break;
            case 16:
                document.getElementById("navbar").style.backgroundColor="#7D6CF9 ";
            break;
            case 17:
                document.getElementById("navbar").style.backgroundColor="#B3F96C ";
            break;
            case 18:
                document.getElementById("navbar").style.backgroundColor="#A5F851";
            break;
            case 19:
                document.getElementById("navbar").style.backgroundColor="#FAB98C ";
            break;
            case 20:
                document.getElementById("navbar").style.backgroundColor="#FAFA8C ";
            break;
            case 21:
                document.getElementById("navbar").style.backgroundColor="coral";
            break;
           
    }

    document.getElementById("demo").innerHTML="Time :"+ t +":"+ m;

</script>      
</body>
</html>