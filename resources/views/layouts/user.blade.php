<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>MovieHunter</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  @vite(['resources/css/user/style.css'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Fredericka+the+Great&display=swap"
    rel="stylesheet">
  @vite(['resources/js/user/jquery-1.4.2.min.js'])
  @vite(['resources/js/user/jquery-func.js'])
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="/css/swiper-bundle.min.css">
  @vite(['resources/css/user/swiper-bundle.min.css'])
  <!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>

<body>
  <!-- START PAGE SOURCE -->
  @auth

  <div id="shell">
    <div id="header">
      <div class="subheader1">
        <h1 id="logo"><a href="#">MovieHunter<img src="/images/logo.png" alt="" /></a></h1>
        <div id="navigation">
          <ul>
            <li><a class="active" href="/dashboard">Home</a></li>
            <li><a href="/user/about">About</a></li>
            <li><a href="#">In theatres</a></li>
            <li><a href="#">Movies</a></li>
          </ul>
        </div>
        <div class="userandsearch">
          <a class="searchbtn">
            <img src="/images/search.png" />
          </a>
          <a class="userprofile">
            <img src="/images/userlogo.jpg" />
          </a>
          <div class="text-end">
            <a href="{{ route('logout') }}" class="btn btn-outline-light me-2"><img src="/images/logout.png"/></a>
          </div>
        </div>
      </div>
      <div id="sub-navigation">
        <div id="search">
          <form action="#" method="get" accept-charset="utf-8">
            <label for="search-field">SEARCH</label>
            <input type="text" name="search field" value="Enter search here" id="search-field"
              class="blink search-field" />
            <input type="submit" value="GO!" class="search-button" />
          </form>
        </div>
      </div>
    </div>
  @yield('content')

  </div>
  @endauth

  @guest
      <script>window.location = "/";</script>
  @endguest
  <!-- END PAGE SOURCE -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<!-- Swiper JS -->
@vite(['resources/js/user/swiper-bundle.min.js'])
<!-- JavaScript -->
@vite(['resources/js/user/script.js'])

</html>