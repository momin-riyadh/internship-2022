<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
  }


  .main {
    height: 100vh;
    width: 100%;
  }

  a {
    text-decoration: none;
    color: gray;
  }

  .home {
    height: auto;

  }

  .marq {
    padding-top: 2rem;
    padding-bottom: 2rem;
    box-shadow: 5px 5px 18px #888888;
  }

  .menu {
    margin-top: 50px;
    display: flex;
    justify-content: center;

    height: auto;
    column-gap: 20px;
    row-gap: 20px;
    flex-wrap: wrap;
    padding: 2rem;
  }

  .item {
    max-width: 250px;
    width: 100%;
    height: auto;

    box-shadow: 2px 5px 10px #888888;
    border-radius: 4px;
  }

  .cart {
    width: 100%;
    height: 150px;


  }

  img {
    height: 100%;
    width: 100%;

  }


  .dropdown {
    width: 100%;
    background-color: #E11730;
    box-shadow: 2px 5px 10px #888888;
    border-radius: 4px;

  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
  }
</style>

<body>
  <div class="main">
    <div class="container-fluid nav d-flex justify-content-center align-items-center border-bottom border-1 ">
      <div class="col-md-5">
        <p class="display-5 ">Food <span style="color:red;">Fiesta</span></p>
      </div>
      <div class="col-md-5 d-flex justify-content-around ">
        <a href="#home">Home</a>
        <a href="">About us</a>
        <a href="#menu">Menu</a>
        <a href="{{route('user.login')}}">Login</a>

      </div>

    </div>


    <div class="container " id="home">
      <div class="row ">
        <div class="col-4 home d-flex flex-column gap-1 ">
          <!-- start -->
          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle form-control" type="button" data-toggle="dropdown">Tutorials
              <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">HTML</a></li>
              <li><a tabindex="-1" href="#">CSS</a></li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li class="dropdown-submenu">
                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">3rd level dropdown</a></li>
                      <li><a href="#">3rd level dropdown</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- 1 -->
          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle form-control" type="button" data-toggle="dropdown">Tutorials
              <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">HTML</a></li>
              <li><a tabindex="-1" href="#">CSS</a></li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li class="dropdown-submenu">
                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">3rd level dropdown</a></li>
                      <li><a href="#">3rd level dropdown</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- 1 -->
          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle form-control" type="button" data-toggle="dropdown">Tutorials
              <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">HTML</a></li>
              <li><a tabindex="-1" href="#">CSS</a></li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li class="dropdown-submenu">
                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">3rd level dropdown</a></li>
                      <li><a href="#">3rd level dropdown</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>

          <!-- 1 -->
          <div class="dropdown">
            <button class="btn btn-lg dropdown-toggle form-control" type="button" data-toggle="dropdown">Tutorials
              <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="#">HTML</a></li>
              <li><a tabindex="-1" href="#">CSS</a></li>
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                  <li class="dropdown-submenu">
                    <a class="test" href="#">Another dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">3rd level dropdown</a></li>
                      <li><a href="#">3rd level dropdown</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- finish -->
        </div>
        <div class="col-8 home ">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{url('food-image','1650795726.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{url('food-image','1650776916.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{url('food-image','1650794446.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>






    <!--home-->

    <!--menu-->

    <div class="container-fluid">

      <div class="row">
        <div class="col-12 marq">
          <marquee>
            <p class="mb-0">50% discount going on! <br>Buy one , Get one!!!</p>
          </marquee>

        </div>
      </div>

    </div>



    <div class="container-fluid menu " id="menu">
      @foreach($f as $f)
      <div class="item p-2">
        <div class="cart p-2 ">
          <img src="{{url('food-image',$f->image)}}" alt="">


        </div>

        <div class="desc p-2">
          <p class="  mb-0 "><b>Category:</b> {{$f->category}}</h3>
          <p class=" mb-0"><b>Item:</b> {{$f->food}}</h3>
          <p class=" mb-0"><b>Price:</b> {{$f->price}}</h3>

        </div>

        <div class="btn d-flex justify-content-between p-2">
          <a href="" class="btn btn-warning">Add to Cart</a>
          <a href="" class="btn btn-success">Order now</a>
        </div>



      </div>
      @endforeach
    </div>




    <!-- footer -->




  </div>


  <script>
    $('#myCarousel').on('slid.bs.carousel', function(event) {
      $('#myCarousel').carousel('2') // Will slide to the slide 2 as soon as the transition to slide 1 is finished
    })

    $('#myCarousel').carousel('1') // Will start sliding to the slide 1 and returns to the caller
    $('#myCarousel').carousel('2') // !! Will be ignored, as the transition to the slide 1 is not finished !!
  </script>



  <script>
    $(document).ready(function() {
      $('.dropdown-submenu a.test').on("click", function(e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
  </script>
</body>

</html>