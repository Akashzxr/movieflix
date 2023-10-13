@extends('layouts.user')
@section('content')

    @vite(['resources/css/user/moviecard.css'])

    <!DOCTYPE html>
<html lang="ru">
  <head>
    <!--  Created by Netology special for Netology Education Show  -->
    <meta charset="UTF-8">
    <title>Educational Show</title>
    <link rel="shortcut icon" href="https://netology-code.github.io/Education-Show/img/favicon.ico">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    
    <main class="movie-info" style="height: 640px;background: url(/storage/{{$movie->movie_image}}) no-repeat center / cover;">
     <div class="shade"></div>
    <div class="trailer-container" id="trailer-container">
      <div class="videoclose">
        <ion-icon name="close-circle-outline" id="trailer-close"></ion-icon><span>close</span>
      </div>
      <iframe class="video" id="video" width="560" height="315" src="https://www.youtube.com/embed/Po3jStA673E?si=p_wzf3B05xoORnGa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <!-- <video class="video" id="video" controls name="media"><source src="{{$movie->trailer_link}}" type="video/mp4"></video>!-->
    </div>

    <!---movie watch!-->
    <div class="movie-container" id="movie-container">
      <div class="videoclose">
        <ion-icon name="close-circle-outline" id="movie-close"></ion-icon><span>close</span>
      </div>
        <iframe class="movie" src="{{$movie->movie_link}}" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>
    </div>
    <!----   !-->

    <div class="centered-container">
        <h1>{{$movie->movie_name}}</h1>
        <div class="movie-meta">
           <span class="movie-duration">{{$movie->runtime}}</span>
           <span class="movie-year">{{$movie->rating}}(imdb)</span>
         </div>
        <p>
          {{$movie->description}}
        <p>
        <div class="starring-container">
            <span class="starring">Starring:</span><div>  {{$movie->actors}}</div>
        </div>
        <div class="btn-block">
          <button class="btn-watch" id="watch"><ion-icon name="caret-forward-outline"></ion-icon>Play</button>
          <button class="btn-wait" id="play-trailer"><ion-icon name="caret-forward-outline"></ion-icon>Trailer</button>
        </div>
      </div>
    </main>
    
    <aside class="additional-info">
      <div class="centered-container _dotted">
        <section class="section movie-details">
          <h2 class="section-header">Movie Details</h2>
          <p class="movie-details-text"><span class="movie-details-highlight">MOVIE NAME</span> {{$movie->movie_name}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">RATING</span> {{$movie->rating}}(imdb)</p>
          <p class="movie-details-text"><span class="movie-details-highlight">RUNTIME</span> {{$movie->runtime}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">RELEASE DATE</span> {{$movie->release_date}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">DESCRIPTION</span> {{$movie->description}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">GENRES</span>
            @foreach($genres as $genre)
             {{$genre->genre_name}},
            @endforeach</p>
          @if($movie->ott_link != null)
          <p class="movie-details-text"><span class="movie-details-highlight">Ott Platform</span>
            <span class="ott-span">
            <a href="{{$movie->ott_link}}"> {{$ott->ott_name}}</a>
            <img class="ott-logo" src="/storage/{{$ott->ott_logo}}">
            </span>
          </p>
          @endif
          <p class="movie-details-text"><span class="movie-details-highlight">DIRECTOR</span> {{$movie->director}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">ACTORS</span> {{$movie->actors}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">PRODUCERS</span> {{$movie->producers}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">WRITTERS</span> {{$movie->writters}}</p>
        
        </section>
      </div>  
    </aside>
      
    <footer class="footer">
      <div class="centered-container">
        <span class="footer-copyright">© 2023, Movieflix</span>
      </div>
    </footer>
  </body>
</html>


<script>
  function view(id){
    id.style.display = "block";
  }
  function close(id){
    id.style.display = "none";
    const video = document.querySelector("div video");
    video.pause();
    video.currentTime = 0;
  }
  const trailer = document.getElementById("trailer-container");
  const trailerbtn = document.getElementById("play-trailer");
  const trailerclosebtn = document.getElementById("trailer-close");

  const movie = document.getElementById("movie-container");
  const moviebtn = document.getElementById("watch");
  const movieclosebtn = document.getElementById("movie-close");

  trailerbtn.addEventListener("click",()=>{view(trailer)});
  trailerclosebtn.addEventListener("click",()=>{close(trailer)});

  moviebtn.addEventListener("click",()=>{view(movie)});
  movieclosebtn.addEventListener("click",()=>{close(movie)});

</script>

@endsection