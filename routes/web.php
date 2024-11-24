<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\MissionController;
use Rap2hpoutre\Chatify\Facades\ChatifyMessenger;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\JournalingController;

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
    return view('accueil');
});

Route::get('/aboutus', function () {
    return view('aboutus');
}); 

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/suggestions', function () {
    return view('Missions.missions');
});

Route::get('/doctors', function () {
    return view('Doctors.doctors');
});

Route::get('/avis', function () {
    return view('Avis.avis');
});



Route::get('/appointements', function () {
    return view('Appointement.appointement');
});

Route::get('/activities', [MissionController::class, 'showMissions']);
Route::post('/missions/{mission}/valider', [MissionController::class, 'valider'])->name('missions.valider');

Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware('auth')->name('dashboard');



// Admin dashboard route
//Route::get('/adminhome', [AdminController::class, 'index'])->name('admin.home');

// Regular user homepage route
Route::get('/', [HomeController::class, 'index'])->name('acceuil');


///////////////////User////////////////////
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
///////////////////////admin///////////////

Route::get('/home',[HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/profile', [AdminController::class, 'show'])->name('profile.show');
Route::put('/profile/{id}', [AdminController::class, 'update'])->name('profile.update');
Route::post('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
Route::post('/admin/add', [AdminController::class, 'addAdmin'])->name('admin.add');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
Route::put('Admin/updateAccount/{id}', [AdminController::class, 'update'])->name('updateUser');

Route::get('/admin/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
Route::get('/admins', [AdminController::class, 'listadmin'])->name('admin.listadmin');
//////////////Models///////////
Route::get('/predict', [PredictionController::class, 'showForm'])->name('predict.form');
Route::post('/predict', [PredictionController::class, 'predict'])->name('predict');
// routes/web.php
// Route for updating the pseudo name (POST request)
Route::put('/update-pseudo-name', [HomeController::class, 'updatePseudoName'])->name('updatePseudoName');

// Route for getting the users (GET request)
Route::get('/list-users', [HomeController::class, 'getUsers'])->name('listusers');
Route::get('/chatify/{user_id}', [ChatifyMessenger::class, 'startChat'])->name('chatify');


require __DIR__.'/auth.php';

//ces routes juste pour affichage des view 




//les vraies routes ->middleware(['auth','admin']) quand l'action est spécifique pour l'admin. pour user ->middleware('auth') pour un visiteur on ne met rien
Route::get('/admin/users', [\App\Http\Controllers\HomeController::class, 'getUsers'])->name('users.list')->middleware(['auth','admin']);
Route::delete('/users/{id}', [\App\Http\Controllers\HomeController::class, 'deleteUser'])->name('users.delete')->middleware(['auth','admin']);
Route::post('/users/{id}/block', [\App\Http\Controllers\HomeController::class, 'blockUser'])->name('users.block')->middleware(['auth','admin']);
Route::post('/users/{id}/unblock', [\App\Http\Controllers\HomeController::class, 'unblockUser'])->name('users.unblock')->middleware(['auth','admin']);
Route::post('/admin/add', [\App\Http\Controllers\HomeController::class, 'addAdmin'])->name('admin.add')->middleware(['auth','admin']);;
Route::get('/admin/create', [\App\Http\Controllers\HomeController::class, 'createAdmin'])->name('admin.create');

Route::resource('categorie', \App\Http\Controllers\CategorieController::class)->middleware(['auth','admin']);
Route::resource('article', \App\Http\Controllers\ArticleController::class);
Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'getarticle'])->name('articles');
Route::resource('medecin', \App\Http\Controllers\MedecinController::class);
Route::get('/medecins', [\App\Http\Controllers\MedecinController::class, 'getmedecin'])->name('medecins');






Route::get('/journal', [JournalingController::class, 'create'])->name('journaling.create');
Route::post('/journal', [JournalingController::class, 'store'])->name('journaling.store');



Route::get('/missions', [MissionController::class, 'index'])->name('missions.index');
Route::post('/missions', [MissionController::class, 'store'])->name('mission.add');
Route::post('/missions/{id}/update', [MissionController::class, 'update'])->name('updatemission');
Route::delete('/missions/{id}', [MissionController::class, 'destroy'])->name('destroymission');