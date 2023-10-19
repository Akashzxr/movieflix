<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>MovieHunter</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  @vite(['resources/css/user/style.css'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Fredericka+the+Great&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
  @if (session('alert'))
  <div id="alert">
    <ion-icon style="color: red" name="warning-outline"></ion-icon>{{ session('alert') }}
    <div class="progress-bar"></div>
  </div>
  @endif

  <div id="shell">
    <div id="header">
      <div class="subheader1">
        <h1 id="logo"><a href="#">MovieHunter<img src="/images/logo.png" alt="" /></a></h1>
        <div id="navigation">
          <ul>
            <li><a class="{{$active=="home" ? "active" : ""}}"  href="/dashboard">Home</a></li>
            <li><a class="{{$active=="about" ? "active" : ""}}" href="/user/about">About</a></li>
       <!--     <li><a class="{{$active=="theatres" ? "active" : ""}}" href="#">In theatres</a></li>!-->
            <li><a class="{{$active=="movies" ? "active" : ""}}" href="/user/movies">Movies</a></li>
          </ul>
        </div>
        <div class="userandsearch">
          <!--  <a class="searchbtn">
            <img src="/images/search.png" />
          </a>!-->
          <form class="search-form" action="/user/search" method="POST">
            @csrf
            <input name="search" type="search" required>
            <i class="fa fa-search"></i>
           <!-- <a href="javascript:void(0)" id="clear-btn">Clear</a>!-->
          </form>
          <a href="/user/profile" class="userprofile">
          @if($user->avatar==null)
          <img src="/images/user/user.jpg" alt="Profile Image">
           @else
          <img src="/storage/{{$user->avatar}}" alt="Profile Image">
           @endif
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
window.onload = function () {
            setTimeout(disappeardiv,4000);
        }
        function disappeardiv() {
            document.getElementById('alert').style.opacity= "0";
            document.getElementById('alert').style.translate= "225px";
            setTimeout(()=>{document.getElementById('alert').style.display= "none";},3000)   
        }
</script>
</body>
<!-- Swiper JS -->
@vite(['resources/js/user/swiper-bundle.min.js'])
<!-- JavaScript -->
@vite(['resources/js/user/script.js'])

</html>