<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', ['framework' => 'Laravel']);
});

// Basic 
Route::get('/test', function () {
    return 'test';
});

// Default : retourner une vue
Route::get('/', function () {
    return view('welcome');
});
 
// Avec des paramètres
Route::get('/bonjour/{name}', function ($name) {
    return 'Nom : '.$name;
});

// Avec des paramètres non obligatoires
Route::get('/user-mandatory/{name?}', function ($name = 'Julian') {
    return $name;
});

// Avec une validation du type
Route::get('/userbis/{name}', function ($name) {
    return 'ici';
})->where('name', '[A-Za-z]+');
// ->where('id', '[0-9]+');

// Get 
// Route::get('/user', [UserController::class, 'index']);

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Permet de générer /users, /users/create, /users/{user}, /users/{user}/edit, /users (POST), /users/{user} (DELETE) 
Route::resource('users', UserController::class);

// Redirect
Route::redirect('/ici', '/la');
Route::redirect('/test1', '/test', 301);
// ou 
// Route::permanentRedirect('/test1', '/test');

// Listing des routes
// php artisan route:list
// php artisan route:list -v

// créer une route avec un nom
Route::get('/user/profile', function () {
    return 'profile';
})->name('profile');

// redirection avec une route qui posséde un nom
Route::get('/test-user', function () {
    return redirect()->route('profile');
});

// Gestion avec des controller
// Route::controller(UserController::class)->group(function () {
//     Route::get('/users/create', 'users.create');
//     Route::post('/users', 'users.index');
// });

// Binding implicit 
// Route::get('/users/{user}', function (User $user) {
//     return $user->email;
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);
