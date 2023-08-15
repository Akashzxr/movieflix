<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>MovieHunter</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  @vite(['resources/css/style.css'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Fredericka+the+Great&display=swap"
    rel="stylesheet">
  @vite(['resources/js/jquery-1.4.2.min.js'])
  @vite(['resources/js/jquery-func.js'])
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="/css/swiper-bundle.min.css">
  @vite(['resources/css/swiper-bundle.min.css'])
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
            <li><a class="active" href="#">HOME</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">IN THEATERS</a></li>
            <li><a href="#">COMING SOON</a></li>
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
            <a href="{{ route('logout') }}" class="btn btn-outline-light me-2"><img src="images/logout.png"/></a>
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
    <div class="slide-container">
      <div class="movie-details-c">
        <h2 class="movie-head-s">THE BATMAN</h2>
        <h2 class="movie-rating-s">4.7(imdb) <p>1hrs:45mins</p>
        </h2>
        <p class="movie-description-s">When a sadistic serial killer begins murdering key political figures<br>
          in Gotham, Batman is forced to investigate the city's hidden corruption<br>
          and question his family's involvement.</p>
        <h2 class="sgt-s"><span>Starring:</span>Robert pattison</h2>
        <h2 class="sgt-s"><span>Genres:</span>Action</h2>
        <h2 class="sgt-s"><span>Tag:</span>Action,Adventure,Horrer</h2>
        <a><button class="p-btn-s">PLAY NOW</button></a>
      </div>
      <img src="/images/batmanhori.jpg" />
      <div class="shade"></div>
    </div>
    <div id="main">
      <div id="content">
        <div class="box">
          <div class="head">
            <h2>LATEST TRAILERS</h2>
            <p class="text-right"><a href="#">View all</a></p>
          </div>
          <div class="main-movie-container">
            <div class="swiper-button-prev p1"></div>
            <div class="moviecontainer mc1">

              <div class="swiper-wrapper">
                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">The Batman</span>
                      <div class="time">2hr : 56mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/batmanhori.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Manichithrathazu</span>
                      <div class="time">2hr : 49mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/movie2b.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">100 Days of Love</span>
                      <div class="time">2hr : 33mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/100daysoflove1.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Attack on Titan</span>
                      <div class="time">4 Seasons</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/aot.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Bheeshma Parvam</span>
                      <div class="time">2hr : 24mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/bheeshma.jpg" alt="" /></a>
                  </div>

                </div>
                <div class="movie last swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Mayanadhi</span>
                      <div class="time">2hr : 16mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/mayanadhi1.jpg" alt="" /></a>
                  </div>
                </div>
              </div>

            </div>
            <div class="swiper-button-next n1"></div>
          </div>
          <div class="cl">&nbsp;</div>
        </div>
        <div class="box">
          <div class="head">
            <h2>TOP RATED</h2>
            <p class="text-right"><a href="#">View all</a></p>
          </div>
          <div class="main-movie-container">
            <div class="swiper-button-prev p2"></div>
            <div class="moviecontainer mc2">
              <div class="swiper-wrapper">

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">OK Kanmani</span>
                      <div class="time">2hr : 56mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/ok-kanmani.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Trance</span>
                      <div class="time">2hr : 35mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/trance.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">KGF2</span>
                      <div class="time">2hr : 48mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/kgf.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Iyobinte Pusthakam</span>
                      <div class="time">2hr : 38mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/iyobintepushtakam.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">2018</span>
                      <div class="time">2hr : 15mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/2018.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie last swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Neelakasham Pachakadal Chuvanna Bhoomi</span>
                      <div class="time">2hr : 23mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/npcb.jpeg" alt="" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next n2"></div>
          </div>
          <div class="cl">&nbsp;</div>
        </div>

        <div class="box">
          <div class="head">
            <h2>MOST COMMENTED</h2>
            <p class="text-right"><a href="#">View all</a></p>
          </div>
          <div class="main-movie-container">
            <div class="swiper-button-prev p3"></div>
            <div class="moviecontainer mc3">
              <div class="swiper-wrapper">

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Spider-Man:Across the Spider-Verse</span>
                      <div class="time">2hr : 16mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/spiderman.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Ranam</span>
                      <div class="time">2hr : 16mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/ranam.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Avatar:The Way of Water</span>
                      <div class="time">3hr : 12mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/avatar2.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Kumblangi Nights</span>
                      <div class="time">2hr : 15mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/movie16.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">Thallumaala</span>
                      <div class="time">2hr : 27mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/thallumala.jpg" alt="" /></a>
                  </div>
                </div>

                <div class="movie last swiper-slide">
                  <div class="movie-image">
                    <span class="play">
                      <span class="name">FIGHT CLUB</span>
                      <div class="time">2hr : 19mins</div>
                      <a><button class="p-btn-card">PLAY NOW</button></a>
                    </span>
                    <a href="#"><img src="/images/fightclub.jpg" alt="" /></a>
                  </div>
                </div>

              </div>
            </div>
            <div class="swiper-button-next n3"></div>
          </div>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>

  </div>
  @endauth

  @guest
      <script>window.location = "/";</script>
  @endguest
  <!-- END PAGE SOURCE -->
</body>
<!-- Swiper JS -->
@vite(['resources/js/swiper-bundle.min.js'])
<!-- JavaScript -->
@vite(['resources/js/script.js'])

</html>