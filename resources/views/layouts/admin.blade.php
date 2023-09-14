<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.css" type="text/css">
    @vite(['resources/css/admin/all.css'])
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    @vite(['resources/css/admin/normalize.css'])
    <link rel="stylesheet" href="css/main.css" type="text/css">
    @vite(['resources/css/admin/main.css'])
    <title>Dashboard Template</title>
</head>

<body>

    <div class="container">
        <!-- Navigation Section -->
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img id="logo" src="/images/logo.png" alt="" />
                        </span>
                    </a>
                </li>
                <li class="{{$active=="dashboard" ? "hovered" : ""}}">
                    <a href="/admin/dashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/movies">
                        <span class="icon">
                            <ion-icon name="film-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Movies</span>
                    </a>
                </li>
                <li class="{{$active=="genre" ? "hovered" : ""}}">
                    <a href="/admin/genre">
                        <span class="icon">
                            <ion-icon name="file-tray-full-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Genre</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="tv-outline"></ion-icon>
                        </span>
                        <span class="title">Manage Theatre</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </span>
                        <span class="title">Manage OTT</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Main Section -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- Search -->
                <div class="search">
                    <label>
                        <input type="text" name="search" placeholder="Search Here...">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- User Account -->
                <div class="user">
                    <img src="/images/user/user.jpg" alt="user image">
                </div>
                <div class="accountMenu">
                    <h3>{{ $user->name }}<br /><span>{{ $user->email }}</span></h3>
                    <ul>
                        <li>
                            <img src="/images/user/user.png" alt="profile">
                            <a href="#">My Profile</a>
                        </li>
                        <li>
                            <img src="/images/user/log-out.png" alt="profile">
                            <a href="{{ route('logout') }}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Cards -->
            <div>
                @yield('content')
             </div>
            </div>
        </div>
    </div>
    <!-- End of Code -->

    <!-- Scripts Files -->
    <script src="js/all.js"></script>
    @vite(['resources/js/admin/all.js'])
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <!-- Scripts Files  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
   <script src="js/mycharts.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>--> 
    <script src="js/main.js"></script>
    @vite(['resources/js/admin/main.js'])
    
</body>

</html>