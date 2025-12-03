<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>e-School</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- nav start -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="Logo.png" alt="" style="width: 200px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Books</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Courses</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" href="#">Others</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" href="#">Blogs</a>
        </li>
      
      </ul>
      <form class="d-flex" role="search">
      
        <button class="btn btn-outline-success" type="submit">Sing In</button>
      </form>
    </div>
  </div>
</nav>

    <!-- nav end  -->



    <!-- hero section start -->

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 align-items-center">
        <div class="col">
          <div class="">
  <div class="card-header">
   <span class="text-danger"> {{ $main->title2 }} </span>
  </div>
  <div class="card-body mt-2">
    <h1 class="card-title">{{ $main->title1 }} </span></h1>
    <p class="card-text">{{ $main->title3 }}</p>
    <a href="#" class="btn btn-success">Get Start</a>
  </div>
</div>
        </div>
        <div class="col">
          <img style="height: 50vh" class="img-fluid" src="{{ url($main->main_image) }}" alt="">
        </div>
      </div>
    </div>

    <!-- hero section end -->


    <!-- book star -->


    <div class="container mt-3">
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 justify-content-between">
        <div class="col">
          <div class="book">
            <div class="book-1">
              <img src="book.png" alt="" style="width: 61px;height: 79px;">
              <h5>1500+Topic</h5>
              <p>Learn Anythings</p>
            </div>
          </div>
        </div>
        <div class="col">
           <div class="book">
            <div class="book-1">
              <img src="Students.png" alt="" style="width: 61px;height: 79px;">
              <h5>1800+Students</h5>
              <p>Learn Anythings</p>
            </div>
          </div>
        </div>
        <div class="col">
           <div class="book">
            <div class="book-1">
              <img src="Test.png" alt="" style="width: 61px;height: 79px;">
              <h5>9K+Test Token</h5>
              <p>Learn Anythings</p>
            </div>
          </div>
        </div>
        <div class="col">
           <div class="book">
            <div class="book-1">
              <img src="Student.png" alt="" style="width: 61px;height: 79px;">
              <h5>2000+Student</h5>
              <p>Learn Anythings</p>
            </div>
          </div>
        </div>

      </div>
    </div>
     <!-- book end -->

     <!-- our couress start -->


     <div class="conainer mt-5">
      <div class="headrr">
        <h1 class="text-center">Online Courses</h1>
      </div>

      <div class="couress container">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @if (count($online)>0)
    @foreach ($online as $online)
       <div class="col">
    <div class="card h-100">
      <img src="{{ url($online->online_image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $online->title }}</h5>
        <p class="card-text">{{ $online->sub_title }}</p>
        <btn-1>
          <button class="btn btn-success"><a href="#"></a>Buy Course</button>
        </btn-1>
      </div>
      
    </div>
  </div>
    @endforeach
      
    @endif
 

 
</div>
      </div>
     </div>
      <!-- our couress end -->



      <div class="container mt-5">
        <div class="row  ">
          <div class="col d-flex gap-5  ">
            <div class="img-own">
              <img src="{{ url($test->own_image) }}" alt="">

            </div>
            <div class="col">
              <h1>{{ $test->title }}</h1>
              <p>{{ $test->sub_title }}</p>

            </div>
          </div>
        </div>
      </div>


      <!-- footer start -->

      <footer class="bg-dark " style="width: 100%;height: 25%;padding-top: 50px;padding-bottom: 50px;">
        <p class="text-center text-white">Copyright © 2025 Abujor</p>
      </footer>

      <!-- footer end -->
    
</body>
</html>