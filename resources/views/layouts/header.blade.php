<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Foody<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item">
            <a class="nav-link  @yield('navHome')" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('navMenu')" href="/menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('navChef')" href="/chef">Chef</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @yield('navBlog')" href="/blog">Blog</a>
          </li>
        </ul>
      <ul>
        <li class="nav-item">
          <a class="nav-link  @yield('navLogin')" href="/login">Login</a>
        </li>
      </ul>
      </nav><!-- .navbar -->
      <a class="btn-book-a-table  @yield('navBooking')" href="/booktable">Book a Table</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

</body>
</html>