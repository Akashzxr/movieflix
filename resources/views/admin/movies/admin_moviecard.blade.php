@extends('layouts.admin')
@section('content')

    @vite(['resources/css/admin/moviecard.css'])

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
          <button class="btn-watch">Watch</button>
          <button class="btn-wait">Play Trailer</button>
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
          <p class="movie-details-text"><span class="movie-details-highlight">GENRES</span> Джейми Чайлдс</p>
          <p class="movie-details-text"><span class="movie-details-highlight">DIRECTOR</span> {{$movie->director}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">ACTORS</span> {{$movie->actors}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">PRODUCERS</span> {{$movie->producers}}</p>
          <p class="movie-details-text"><span class="movie-details-highlight">WRITTERS</span> {{$movie->writters}}</p>
        
        </section>
      </div>  
    </aside>
      
    <footer class="footer">
      <div class="centered-container">
        <span class="footer-copyright">© 2019, Educational Show</span>
      </div>
    </footer>
  </body>
</html>

@endsection