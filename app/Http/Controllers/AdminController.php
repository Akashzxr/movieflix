<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
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



    //------------------Admin theatre functions-----------------------
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

}
