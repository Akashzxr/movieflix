<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//user section---------------------------------------
Route::middleware(['noadminaccess','auth','verified'])->group(function () {

    Route::get('/dashboard', [UserController::class, 'Dashboard'])->name('user.dashboard');
    Route::get('/movie/{id}', [UserController::class, 'MovieCard'])->name('user.moviecard');
    Route::post('/user/review/add', [UserController::class, 'AddReview'])->name('user.addreview');
    Route::post('/user/search', [UserController::class, 'UserSearch'])->name('user.search');
    Route::post('/user/feedback', [UserController::class, 'AddFeedback'])->name('user.feedback');
    Route::get('/user/movies', [UserController::class, 'ViewMovies'])->name('user.movies');
    Route::get('/user/about', function () {
        return view('user.about',['active' => "about"]);
    })->name('user.about');

    
   Route::get('/user/profile', [UserController::class, 'Profile'])->name('user.profile');
   Route::post('/user/profile/update', [UserController::class, 'UpdateProfile'])->name('user.profileupdate');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin section------------------------------------

Route::middleware(['nouseraccess','auth','verified'])->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.admin_dashboard');



Route::get('/admin/genre', [AdminController::class, 'ViewGenre'])->name('admin.genre');
Route::delete('/admin/genre/{id}', [AdminController::class, 'DeleteGenre'])->name('admin.deletegenre');
Route::post('/admin/genre/add', [AdminController::class, 'AddGenre'])->name('admin.addgenre');
Route::get('/admin/genre/add-form', function () {
    return view('admin.genre.admin_genre_add',
                ['active' => "addform"]);
})->name('admin.genreaddform');




Route::get('/admin/theatre', [AdminController::class, 'ViewTheatre'])->name('admin.theatre');
Route::delete('/admin/theatre/{id}', [AdminController::class, 'Deletetheatre'])->name('admin.deletetheatre');
Route::post('/admin/theatre/add', [AdminController::class, 'Addtheatre'])->name('admin.addtheatre');

Route::get('/admin/theatre/add-form', function () {
return view('admin.theatre.admin_theatre_add',
        ['active' => "addform"]);
})->name('admin.theatreaddform');



Route::get('/admin/ott', [AdminController::class, 'ViewOtt'])->name('admin.ott');
Route::delete('/admin/ott/{id}', [AdminController::class, 'DeleteOtt'])->name('admin.deleteott');
Route::post('/admin/ott/add', [AdminController::class, 'AddOtt'])->name('admin.addott');
Route::get('/admin/ott/add-form', function () {
    return view('admin.ott.admin_ott_add',
                ['active' => "addform"]);
})->name('admin.ottaddform');



Route::get('/admin/movies', [AdminController::class, 'ViewMovies'])->name('admin.movies');
Route::get('/admin/movies/add-form', [AdminController::class, 'MoviesAddForm'])->name('admin.moviesaddform');
Route::post('/admin/movies/add', [AdminController::class, 'MoviesAdd'])->name('admin.moviesadd');
Route::get('/admin/moviecard/{id}', [AdminController::class, 'MovieCard'])->name('admin.moviecard');


Route::get('/admin/profile', [AdminController::class, 'Profile'])->name('admin.profile');
Route::post('/admin/profile/update', [AdminController::class, 'UpdateProfile'])->name('admin.profileupdate');
});


//Route::get('/admin/admin_dashboard',[AdminController::class, 'AdminDashboard']);
