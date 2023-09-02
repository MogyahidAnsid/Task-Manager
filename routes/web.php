<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard\Index;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard');
    Route::get('/projects', App\Livewire\Projects\Index::class)->name('projects');
    Route::get('/planning', App\Livewire\Planning\Index::class)->name('planning');
    Route::get('/calendar', App\Livewire\Calendar\Index::class)->name('calendar');
    Route::get('/teams', App\Livewire\Team\Index::class)->name('teams');
    Route::get('/components', App\Livewire\Components\Index::class)->name('components');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
