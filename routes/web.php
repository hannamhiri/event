<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/index', function () {
    return view('index');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//ces routes juste pour affichage des view 
Route::get('/show_users', function () {
    return view('admin.users.show_users');
});
Route::get('/show_events_for_admin', function () {
    return view('admin.events.show_events');
});
Route::get('/show_registrations', function () {
    return view('user.show_registrations');
});
Route::get('/create_user', function () {
    return view('admin.users.create_user');
});
Route::get('/workshops', function () {
    return view('event.category');
});

Route::get('/web_dev', function () {
    return view('event.event'); 
});


//les vraies routes ->middleware(['auth','admin']) quand l'action est spécifique pour l'admin. pour user ->middleware('auth') pour un visiteur on ne met rien
Route::resource('category', \App\Http\Controllers\CategoryController::class)->middleware(['auth','admin']);
Route::resource('event', \App\Http\Controllers\EventController::class)->middleware('auth');
Route::get('/user/events', [\App\Http\Controllers\EventController::class, 'showEventByUser'])->middleware('auth');

