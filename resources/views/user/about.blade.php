@extends('layouts.user')
@section('content')
  
<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: inherit;
  color: inherit;
}
.mySlides {display: none}

#band{
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
}
</style>
</head>
<body>
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="/images/landingpage/header-image.png" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/images/landingpage/slide2.png" style="width:100%">
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/images/landingpage/slide3.png" style="width:100%">
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <img style="width: 19rem;" class="w3-wide" src="/images/logo.png"/>
    <p class="w3-opacity"><i>We love movies</i></p>
    <p class="w3-justify">Welcome to <span style="color: red;">Movieflix</span>, your ultimate destination for an unparalleled cinematic experience! We are your gateway to a world of captivating stories, breathtaking visuals, and unforgettable moments. Our platform is designed to cater to all your movie-watching desires, offering an extensive library of films from all genres, eras, and cultures.</p>
    <div class="w3-row w3-padding-32 " style="display: flex;width:100%;justify-content:space-between">
      
    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">KEY FEATURES</h2>
      <div class=" w3-padding-64">
      <h3 class="w3-opacity w3-wide w3-center" style="color: red;"><i>Watch Movies</i></h3>
      <p class="w3-justify">Watch Movies: Dive into a treasure trove of movies spanning various genres, including action, drama, comedy, romance, sci-fi, horror, and much more. Our vast collection ensures that there's something for every movie enthusiast.</p>
     </div>

     <div class=" w3-padding-64">
      <h3 class="w3-opacity w3-wide w3-center" style="color: red;"><i> Rate and Review</i></h3>
      <p class="w3-justify">Your opinion matters! Share your thoughts by giving movies ratings and writing insightful reviews. Help fellow cinephiles discover hidden gems or avoid cinematic disappointments. Engage in lively discussions with our community of movie lovers.</p>
     </div>

     <div class=" w3-padding-64">
      <h3 class="w3-opacity w3-wide w3-center" style="color: red;"><i>Movie Details</i></h3>
      <p class="w3-justify">Explore in-depth movie details that provide you with essential information, such as the cast, director, release year, plot summaries, and genre. This knowledge enriches your movie-watching experience.</p>
     </div>

     
     <div class=" w3-padding-64">
      <h3 class="w3-opacity w3-wide w3-center" style="color: red;"><i>Watch Movie Trailers</i></h3>
      <p class="w3-justify">Get a sneak peek into the magic of each film with high-quality trailers. Make informed decisions about what to watch next by sampling the essence of a movie.</p>
     </div>
    </div>
  </div>


  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i style="color: black" class="fa fa-map-marker" style="width:30px"></i> kerala,kochi<br>
        <i style="color: black" class="fa fa-phone" style="width:30px"></i> Phone: +91 9946478853<br>
        <i style="color: black" class="fa fa-envelope" style="width:30px"> </i> Email: movieflix@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/user/feedback" method="POST">
          @csrf
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Image of location/map -->
<iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.4591278851444!2d76.26638177459624!3d10.143284170553734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081a7de3c840b9%3A0xd50a6450e17f506e!2sSNGIST%20ARTS%20AND%20SCIENCE%20College%20Manakkapady!5e0!3m2!1sen!2sin!4v1697695345851!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i style="color: black" class="fa fa-facebook-official w3-hover-opacity"></i>
  <i style="color: black" class="fa fa-instagram w3-hover-opacity"></i>
  <i style="color: black" class="fa fa-snapchat w3-hover-opacity"></i>
  <i style="color: black" class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i style="color: black" class="fa fa-twitter w3-hover-opacity"></i>
  <i style="color: black" class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


@endsection