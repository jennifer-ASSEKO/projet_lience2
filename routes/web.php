<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;

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
    return view('pages.home');
});

Route::get('/login', function () {
    return view('template2.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('template1.dashboard');
});

Route::get('/register', function () {
    return view('template2.inscription');
})->name('register');

// Route pour la page d'accueil
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Route pour la page "À propos de nous"
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Route pour la page "Nos services"
Route::get('/services', function () {
    return redirect('/#services'); // Redirige vers la section "Services" sur la page d'accueil
})->name('services');

// Route pour la page "Contactez-nous"
Route::get('/contact', function () {
    return redirect('/#appointment'); // Redirige vers la section "Make an appointment" sur la page d'accueil
})->name('contact');

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->middleware('guest') // Accessible uniquement pour les utilisateurs non connectés
    ->name('login');

Route::post('/connexion', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth') // Accessible uniquement pour les utilisateurs connectés
    ->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
});