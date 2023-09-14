<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','noadminaccess'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['nouseraccess','auth'])->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.admin_dashboard');
Route::get('/admin/genre', [AdminController::class, 'ViewGenre'])->name('admin.genre');
Route::delete('/admin/genre/{id}', [AdminController::class, 'DeleteGenre'])->name('admin.deletegenre');
Route::post('/admin/genre/add', [AdminController::class, 'AddGenre'])->name('admin.addgenre');

Route::get('/admin/genre/add-form', function () {
   // return view('admin.admin_genre_add');
    return view('admin.admin_genre_add',
                ['active' => "addform"]);
})->name('admin.addform');

Route::get('/admin/movies', function () {
    return view('admin.admin_movies');
});

});

//Route::get('/admin/admin_dashboard',[AdminController::class, 'AdminDashboard']);
