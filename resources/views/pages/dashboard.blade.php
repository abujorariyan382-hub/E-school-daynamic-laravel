<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <!-- Top nav start -->
 <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold fs-3">Dashboard</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
    
     <!--Top Nav End -->


     <!-- sideber start -->

     <div class="sideber">
      <nav class="nav flex-column" >
        <a class="nav-link" href="">
          <span class="icon">
            <i class="bi bi-grid"></i>
          </span>
          <span class="description">Dashboard</span>
        </a>
        <a class="nav-link" href="">
          <span class="icon">
            <i class="bi bi-bell"></i>
          </span>
          <span class="description">Notification</span>
        </a>
        <!-- togol -->

          <a class="nav-link " href="" data-bs-toggle="collapse" data-bs-target="#submenu" aria-expanded="false">
          <span class="icon">
            <i class="bi bi-box-seam"></i>
          </span>
          <span class="description"> Main <i class="bi bi-caret-down-fill"></i>

          </span>
        </a>
        <div class="sub-menu collapse" id="submenu">
          <a class="nav-link " href="" >
             <nav class="sb-sidenav-menu-nested nav d-block mb-2 ">
              <a class="nav-link" href="">Static Create</a>
              <a class="nav-link" href="">List</a>
              </nav>
          </a>
          <!-- togel end -->
           

          

        </div>


          <a class="nav-link " href="" data-bs-toggle="collapse" data-bs-target="#submenu1" aria-expanded="false">
          <span class="icon">
            <i class="bi bi-clipboard"></i>
          </span>
          <span class="description"> Hero <i class="bi bi-caret-down-fill"></i>

          </span>
        </a>
        <div class="sub-menu collapse" id="submenu1">
          <a class="nav-link " href="" >
             <nav class="sb-sidenav-menu-nested nav d-block mb-2 ">
              <a class="nav-link" href="">Static Create</a>
              <a class="nav-link" href="">List</a>
              </nav>
          </a>
          <!-- togel end -->


           

          

        </div>

      </nav>
     </div>
      <!-- sideber end -->

<!-- main menu start -->
<div id="layoutSideNav_content">

  <main>
                    <div class="container-fluid px-4 main">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
                </main>
</div>
<!-- main menu end -->

<footer class="footer">
  <p class="d-flex align-items-center">Copyright: Abujor Ariyan 2025</p>
</footer>

</body>
</html>