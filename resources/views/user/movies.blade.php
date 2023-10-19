@extends('layouts.user')
@section('content')
<style>
 .main-movie-container{
    padding-top: 7rem;
    padding-bottom: 1rem;
 }

 .m1{
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
 }

 .movie{
    width:420.333px;
 }
</style>

<div class="main-movie-container">

    <div class="moviecontainer mc2 m1">
      

        @foreach($movies as $movie)
        <div class="movie">
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
@endsection