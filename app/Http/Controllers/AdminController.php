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

class AdminController extends Controller
{
    public function AdminDashboard(){
        $UserCount = User::where('role','user')
                      ->count();
        $MovieCount = Movie::count();
        $ReviewCount = Review::count();
        $GenreCount = Genre::count();
        //dd($MovieCount);
        return view('admin.dashboard.admin_dashboard',
                     ['usercount' => $UserCount,
                       'moviecount' => $MovieCount,
                       'reviewcount' => $ReviewCount,
                       'genrecount' => $GenreCount,
                       'active' => "dashboard",
                    ]);
    }


//---------------------admin genre functions---------------------------------
    public function ViewGenre()
    {
        $genres = Genre::paginate(5);

        return view('admin.genre.admin_genres',
                    ['genres' => $genres,
                    'active' => "genre"]);
                   
    }

    public function DeleteGenre(Request $request, $id): RedirectResponse
    {
        Genre::where('genre_id',$id)->delete();
        return Redirect::route('admin.genre')->with('status', 'genre-deleted');
    }

    public function AddGenre(Request $request): RedirectResponse
    {
      $genre = Genre::create([
         'genre_name' => $request->genre_name,
      ]);
      $genre->save();
      return Redirect::route('admin.genreaddform');
    }


//------------------Admin theatre functions-----------------------
    public function ViewTheatre()
    {
      $theatres = Theatre::paginate(5);

      return view('admin.theatre.admin_theatres',
                  ['theatres' => $theatres,
                  'active' => "theatre"]);              
    }

    public function DeleteTheatre(Request $request, $id): RedirectResponse
    {
        Theatre::where('theatre_id',$id)->delete();
        return Redirect::route('admin.theatre')->with('status', 'theatre-deleted');
    }

    public function AddTheatre(Request $request): RedirectResponse
    {
      $theatre = Theatre::create([
         'theatre_name' => $request->theatre_name,
         'location' => $request->theatre_location,
      ]);
      $theatre->save();
      return Redirect::route('admin.theatreaddform');
    }



    //------------------Admin ott functions-----------------------
    public function ViewOtt()
    {
      $ott = Ott::paginate(5);
      return view('admin.ott.admin_ott',
                  ['otts' => $ott,
                  'active' => "ott"]);   
                 
    }

    public function AddOtt(Request $request): RedirectResponse
    {
      $file = $request->file('ottlogo');
      $path = $request->file('ottlogo')->store('images','public');

      $ott = Ott::create([
         'ott_name' => $request->ottname,
         'ott_logo' => $path,
      ]);
      $ott->save();
      return Redirect::route('admin.ottaddform');
    }


    public function DeleteOtt(Request $request, $id): RedirectResponse
    {
        Ott::where('id',$id)->delete();
        return Redirect::route('admin.ott')->with('status', 'ott-deleted');
    }



    //------------------Admin movies functions-----------------------
    public function ViewMovies()
    {
      $movies = Movie::paginate(5);
      return view('admin.movies.admin_movies',
                  ['movies'=>$movies,
                    'active'=>'movies']);            
    }

    public function MoviesAddForm()
    {
      $genres = Genre::get();
      $theatres = Theatre::get();
      $ott = Ott::get();
      return view('admin.movies.admin_movies_add',
     ['genres'=>$genres,
       'theatres'=>$theatres,
       'otts'=>$ott,
      'active'=>'movies']);       
    }

    public function MoviesAdd(Request $request): RedirectResponse
    {
      $file = $request->file('image');
      $path = $request->file('image')->store('images','public');
      //dd($request);
      $movie = Movie::create([
         'movie_name' => $request->movie_name,
         'genres' => json_encode($request->genre),
         'director' => $request->director ,
         'producers' => $request->producers,
         'writters' => $request->writters,
         'actors' =>  $request->actors,
         'description' =>  $request->description,
         'movie_image' =>  $path,
         'trailer_link' =>  $request->trailer,
         'rating' => $request->rating,
         'release_date' => $request->releasedate,
         'runtime' => $request->runtime,
         'theatres' => json_encode($request->theatre),
         'ott_platform' => $request->ott,
         'ott_link' => $request->ottlink,
         'imdb_id' => $request->imdbid,
         'movie_link'=> $request->movielink,
      ]);
      $movie->save();
      return Redirect::route('admin.moviesaddform');
    }

    public function MovieCard(Request $request, $id)
    {
      $movie = Movie::firstWhere('movie_id',$id);
      $ott = Ott::firstWhere('id',$movie->ott_platform);
      $genre_id = json_decode($movie->genres);
      $genres = [];

      for($i=0;$i<count($genre_id);$i++){
        $genre = Genre::firstWhere('genre_id',$genre_id[$i]);
        array_push($genres,$genre);
      };
     // dd($ott);
      return view('admin.movies.admin_moviecard',
     [
      'active'=>'movies',
      'movie' => $movie,
      'genres' => $genres,
      'ott' => $ott,
    ]);       
   }

//--------------profile--------------------------
public function Profile()
{
    return view('admin.profile.admin_profile',[
      'active' => 'profile',
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
  return Redirect::route('admin.profile');
}

}
