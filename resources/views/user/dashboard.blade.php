@extends('layouts.user')
@section('content')

<div class="slide-container">
  <div class="movie-details-c">
    <h2 class="movie-head-s">{{$slider_movie->movie_name}}</h2>
    <h2 class="movie-rating-s">4.7(imdb) <p>1hrs:45mins</p>
    </h2>
    <p class="movie-description-s">{{$slider_movie->description}}</p>
    <h2 class="sgt-s"><span>Starring:</span>{{$slider_movie->actors}}</h2>
    <h2 class="sgt-s"><span>Genres:</span>
      @foreach($genres as $genre)
      {{$genre->genre_name}},
      @endforeach
    </h2>
    <div>
      <a href="/movie/{{$slider_movie->movie_id}}"><button class="p-btn-s">PLAY NOW</button></a>
    <!--  <a><button class="trailer-btn">Trailer</button></a>!-->
    </div>
    
  </div>
  <img src="/storage/{{$slider_movie->movie_image}}" />
  <div class="shade"></div>
</div>
<div id="main">
  <div id="content">
    <div class="box">
      <div class="head">
        <h2>LATEST MOVIES</h2>
        <p class="text-right"><a href="#">View all</a></p>
      </div>
      <div class="main-movie-container">
        <div class="swiper-button-prev p1"></div>
        <div class="moviecontainer mc1">

          <div class="swiper-wrapper" >

            @foreach($latest as $movie)
            <div class="movie swiper-slide">
              <div class="movie-image">
                <span class="play">
                  <span class="name">{{$movie->movie_name}}</span>
                  <div class="time">{{$movie->runtime}}</div>
                  <div class="rating">
                    <ion-icon class="star" name="star"></ion-icon><span>{{$movie->rating}}<span>/10</span></span>
                  </div>
                  <a href="/movie/{{$movie->movie_id}}"><button class="p-btn-card">PLAY NOW</button></a>
                </span>
                <a href="#"><img src="/storage/{{$movie->movie_image}}" alt="" /></a>
              </div>
            </div>
            @endforeach
          </div>

        </div>
        <div class="swiper-button-next n1"></div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div class="box">
      <div class="head">
        <h2>ACTION</h2>
        <p class="text-right"><a href="#">View all</a></p>
      </div>
      <div class="main-movie-container">
        <div class="swiper-button-prev p2"></div>
        <div class="moviecontainer mc2">
          <div class="swiper-wrapper">

            @foreach($action as $movie)
            <div class="movie swiper-slide">
              <div class="movie-image">
                <span class="play">
                  <span class="name">{{$movie->movie_name}}</span>
                  <div class="time">{{$movie->runtime}}</div>
                  <div class="rating">
                    <ion-icon class="star" name="star"></ion-icon><span>{{$movie->rating}}<span>/10</span></span>
                  </div>
                  <a href="/movie/{{$movie->movie_id}}"><button class="p-btn-card">PLAY NOW</button></a>
                </span>
                <a href="#"><img src="/storage/{{$movie->movie_image}}" alt="" /></a>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="swiper-button-next n2"></div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>

    <div class="box">
      <div class="head">
        <h2>Thriller</h2>
        <p class="text-right"><a href="#">View all</a></p>
      </div>
      <div class="main-movie-container">
        <div class="swiper-button-prev p3"></div>
        <div class="moviecontainer mc3">
          <div class="swiper-wrapper">

            @foreach($thriller as $movie)
            <div class="movie swiper-slide">
              <div class="movie-image">
                <span class="play">
                  <span class="name">{{$movie->movie_name}}</span>
                  <div class="time">{{$movie->runtime}}</div>
                  <div class="rating">
                    <ion-icon class="star" name="star"></ion-icon><span>{{$movie->rating}}<span>/10</span></span>
                  </div>
                  <a href="/movie/{{$movie->movie_id}}"><button class="p-btn-card">PLAY NOW</button></a>
                </span>
                <a href="#"><img src="/storage/{{$movie->movie_image}}" alt="" /></a>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="swiper-button-next n3"></div>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
  </div>
  <div class="cl">&nbsp;</div>
</div>



@endsection