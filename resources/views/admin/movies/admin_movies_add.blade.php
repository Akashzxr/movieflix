@extends('layouts.admin')
@section('content')

<head>
   @vite(['resources/css/admin/movies.css'])
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
 <!-- Select2 CSS -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  
</head>
  
<body>
  
    <section class="get-in-touch">
        <form class="contact-form row" action="/admin/movies/add" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
           
           <div class="form-field col x-100">
              <input id="movie_name"  class="input-text js-input" type="text" name="movie_name" required>
              <label class="label" for="movie_name">Movie Name</label>
           </div>
           
           <div>
           <p class="droplabel">Genre</p>
           <select name="genre[]" class="multi" multiple="multiple" id="myMulti">
            @foreach($genres as $genre)
             <option value="{{$genre->genre_id}}" >{{$genre->genre_name}}</option>
            @endforeach
            </select>
           </div>

           <p class="droplabel">Theatre</p>
           <select name="theatre[]" class="multi" multiple="multiple" id="myMulti2">
            @foreach($theatres as $theatre)
             <option value="{{$theatre->theatre_id}}">{{$theatre->theatre_name}}</option>
            @endforeach
            </select>

            <div class="form-field col x-100">
                <input id="director"  class="input-text js-input" type="text" name="director" required>
                <label class="label"  for="director">Directors <span>(Seperate names using comma ,)</span></label>
             </div>

             <div class="form-field col x-100">
                <input id="producers" placeholder=""  class="input-text js-input" type="text" name="producers" required>
                <label class="label" for="producers">producers <span>(Seperate names using comma ,)</span></label>
             </div>

             <div class="form-field col x-100">
                <input id="writters"   class="input-text js-input" type="text" name="writters" required>
                <label class="label" for="writters">Writters <span>(Seperate names using comma ,)</span></label>
             </div>

             <div class="form-field col x-100">
                <input id="actors"  class="input-text js-input" type="text" name="actors" required>
                <label class="label" for="producers">Actors <span>(Seperate names using comma ,)</span></label>
             </div>

             <div class="form-field col x-100">
                <p class="droplabel">Description</p>
                <textarea placeholder="description" class="text-area" rows="5" name="description"></textarea>
             </div>

             <div class="form-field col x-100">
                <input id="trailer"  class="input-text js-input" type="url" name="trailer" required>
                <label class="label" for="trailer">Trailer URL</label>
             </div>

             <div class="form-field col x-100">
                <input id="rating"  class="input-text js-input" type="text" name="rating" required>
                <label class="label" for="rating">Rating</label>
             </div>

             <div class="form-field col x-100">
                <input id="relasedate"  class="input-text js-input" type="date" name="releasedate" required>
                <label class="label" for="releasedate">Release date</label>
             </div>

             <div class="form-field col x-100">
                <input id="runtime"  class="input-text js-input" type="text" name="runtime" required>
                <label class="label" for="runtime">Runtime</label>
             </div>
        
           

             <p class="droplabel">Ott platform</p>
            <select class="single-dropdown" name="ott" id="myMulti3">
               @foreach($otts as $ott)
               <option value="{{$ott->id}}">{{$ott->ott_name}}</option>
               @endforeach
             </select> 

             <div class="form-field col x-100">
               <input id="ottlink"  class="input-text js-input" type="url" name="ottlink" required>
               <label class="label" for="trailer">Ott URL</label>
            </div>

            <div class="form-field col x-100">
               <input id="imdbid"  class="input-text js-input" type="text" name="imdbid" required>
               <label class="label"  for="imdbid">IMDB Id</label>
            </div>

            <div class="form-field col x-100">
               <input id="movielink"  class="input-text js-input" type="url" name="movielink" required>
               <label class="label"  for="movielink">Movie Link</label>
            </div>
            
             <div class="form-field col x-100">
                <input  class="input-text js-input" type="file" name="image" required>
                <label class="label" for="image">Movie Image</label>
             </div>


            <div class="form-field col x-100 align-center">
                <input class="submit-btn" type="submit" value="Add Movie">
            </div>
        </form>
    </section>
  </div>
  
  
    
    
  <script  src="js/index.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  @vite(['resources/js/admin/moviesdrop.js'])
  <script>
  // $(document).ready(function() {
   $('#myMulti2').select2({
      placeholder: "Select theatres",
      width: '100%',
    });
    $('#myMulti').select2({
      placeholder: "Select genres",
      width: '100%',
    });
   
 //  });

  
</script>
  
  
  </body>

@endsection