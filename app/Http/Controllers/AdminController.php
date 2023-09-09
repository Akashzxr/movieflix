<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Review;
use App\Models\Genre;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $UserCount = User::where('role','user')
                      ->count();
        $MovieCount = Movie::count();
        $ReviewCount = Review::count();
        $GenreCount = Genre::count();
        //dd($MovieCount);
        return view('admin.admin_dashboard',
                     ['usercount' => $UserCount,
                       'moviecount' => $MovieCount,
                       'reviewcount' => $ReviewCount,
                       'genrecount' => $GenreCount,
                    ]);
    }
}
