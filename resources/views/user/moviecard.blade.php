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
   <!-- <div class="trailer-container" id="trailer-container">
      <div class="videoclose">
        <ion-icon name="close-circle-outline" id="trailer-close"></ion-icon><span>close</span>
      </div>
      <iframe class="video" id="video" width="560" height="315" src="{{$movie->trailer_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>!-->

    <!---movie watch!-->
   <!-- <div class="movie-container" id="movie-container">
      <div class="videoclose">
        <ion-icon name="close-circle-outline" id="movie-close"></ion-icon><span>close</span>
      </div>
        <iframe class="movie" src="{{$movie->movie_link}}" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>
    </div>!-->
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
      
    <div class="review-container">

      @if(count($reviews)>0)
      <div class="reviews">
      
        @foreach($reviews as $review)
           
      <!-- social block start -->
           <div class="social-block product-review hide-mobile">
             <div class="social-block-header">
               <img src="/storage/{{$user->avatar}}" class="social-block-avatar" />
               <div class="social-block-title-group">
                 <p class="social-block-title">{{$review->username}}
                  <div>
                  <ion-icon style="{{$review->rating >="1" ? "color:gold" : ""}}" name="{{$review->rating >="1" ? "star" : "star-outline"}}"></ion-icon>
                  <ion-icon style="{{$review->rating >="2" ? "color:gold" : ""}}" name="{{$review->rating >="2" ? "star" : "star-outline"}}"></ion-icon>
                  <ion-icon style="{{$review->rating >="3" ? "color:gold" : ""}}" name="{{$review->rating >="3" ? "star" : "star-outline"}}"></ion-icon>
                  <ion-icon style="{{$review->rating >="4" ? "color:gold" : ""}}" name="{{$review->rating >="4" ? "star" : "star-outline"}}"></ion-icon>
                  <ion-icon style="{{$review->rating >="5" ? "color:gold" : ""}}" name="{{$review->rating >="5" ? "star" : "star-outline"}}"></ion-icon>
                  </div>
                 
                </p>
               </div>
             </div>
             <p class="review-title">{{$review->review_title}}</p>
             <p class="social-block-review">{{$review->review}}
             <div class="social-block-footer">
               <p class="social-block-source">&nbsp;</p>
               <div class="social-block-source-image">&nbsp;</div>
             </div>
           </div>
  <!-- social block end -->
  
           @endforeach
      </div>
      @else
      <h1>No reviews added</h1>
      @endif
    
    <form class="review-form" action="/user/review/add" method="POST">
      @csrf
    <span class="star-cb-group">
      <input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
      <input type="radio" id="rating-4" name="rating" value="4" checked="checked" /><label for="rating-4">4</label>
      <input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
      <input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
      <input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
      <input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
    </span>
    <input name="movie_id" value="{{$movie->movie_id}}" type="hidden"/>
    <input class="input" type="text" placeholder="review title" name="review_title"/>
    <textarea placeholder="Review description" name="review"></textarea>
    <button class="add-btn" type="submit">Add</button>
    </form>

    </div>
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


//rating
var logID = 'log',
  log = $('<div id="'+logID+'"></div>');
$('body').append(log);
  $('[type*="radio"]').change(function () {
    var me = $(this);
    log.html(me.attr('value'));
  });
</script>

@endsection