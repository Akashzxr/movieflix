<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use App\Models\Genre;
use App\Models\Theatre;
use App\Models\Ott;
use App\Models\Feedback;

class UserController extends Controller
{
    public function Dashboard(){
        $slider_movie = Movie::firstWhere('movie_id','2');
        $movies_latest = Movie::orderBy('movie_id', 'desc')->take(5)->get();
        $movies = Movie::get();
        $slider_genre_id = json_decode($slider_movie->genres);
        $slider_genres = [];
        $action=[];
        $thriller=[];

      for($i=0;$i<count($slider_genre_id);$i++){
        $slider_genre = Genre::firstWhere('genre_id',$slider_genre_id[$i]);
        array_push($slider_genres,$slider_genre);
      };


      for($i=0;$i<count($movies);$i++){
        $genre_id = json_decode($movies[$i]->genres);
        
        for($j=0;$j<count($genre_id);$j++){
            $genre = Genre::firstWhere('genre_id',$genre_id[$j]);

            if($genre->genre_name == "Action"){
                array_push($action,$movies[$i]);
            }
            elseif($genre->genre_name == "Thriller"){
                array_push($thriller,$movies[$i]);
            }
        };
      };


        return view('user.dashboard',[
            'slider_movie' => $slider_movie,
            'genres'=>$slider_genres,
            'latest'=>$movies_latest,
            'action' => $action,
            'thriller' => $thriller,
            'active' => 'home',
        ]);

    }

    public function MovieCard(Request $request, $id)
    {
      $movie = Movie::firstWhere('movie_id',$id);
      $review = Review::
                join('users', 'users.id', '=', 'reviews.user_id')
                ->where('movie_id', '=', $id)
                ->get();
      $ott = Ott::firstWhere('id',$movie->ott_platform);
      $genre_id = json_decode($movie->genres);
      $genres = [];

      for($i=0;$i<count($genre_id);$i++){
        $genre = Genre::firstWhere('genre_id',$genre_id[$i]);
        array_push($genres,$genre);
      };
      return view('user.moviecard',
     [
      'active'=>'movies',
      'movie' => $movie,
      'genres' => $genres,
      'ott' => $ott,
      'reviews' => $review,
    ]);       
   }

   public function AddReview(Request $request): RedirectResponse
   {
     $Review = Review::create([
        'movie_id' => $request->movie_id,
        'user_id' => Auth::id(),
        'review_title' => $request->review_title,
        'review' => $request->review,
        'rating' => $request->rating,
     ]);
     $Review->save();
     return redirect()->route('user.moviecard', ['id' => $request->movie_id]);
   }

   public function UserSearch(Request $request): RedirectResponse
   {
    $search = $request->search;
    $result = Movie::firstWhere('movie_name',$search);
    if($result != null){
      return redirect()->route('user.moviecard', ['id' => $result->movie_id]);
    }
    else{
      return Redirect::route('user.dashboard')->with('alert', 'No movies Found!');
    }
   }

   public function AddFeedback(Request $request): RedirectResponse
   {
     $feedback = Feedback::create([
        'user_id' => Auth::id(),
        'feedback' => $request->message,
     ]);
     $feedback->save();
     return Redirect::route('user.about');
   }


   public function ViewMovies(){
    $movies = Movie::get();

    return view('user.movies',[
        'movies' => $movies,
        'active' => 'movies',
    ]);  
   }

   public function Profile(){
    $movies = Movie::get();

    return view('user.profile',[
      'active' => "none",
    ]);  
   }

   public function UpdateProfile(Request $request): RedirectResponse
  {
  $id = Auth::id();
  $file = $request->file('image');
  $path = $request->file('image')->store('images','public');
  User::where('id', $id)
      ->update([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'avatar'=>$path
      ]);
  return Redirect::route('user.profile');
 }

}