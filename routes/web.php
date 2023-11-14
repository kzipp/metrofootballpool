<?php

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

Route::view('/', 'dashboard');

// about to pages/about.blade.php
Route::view('about', 'pages.about');
Route::view('registration', 'pages.registration');
Route::view('rules', 'pages.rules');
Route::view('teams', 'pages.teams');
Route::view('payouts', 'pages.payouts');

// csv-template route that points to a .csv file
Route::get('csv-template', function () {
    return response()->download(public_path('csv-template.csv'));
})->name('csv-template');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('picks', \App\Livewire\PickGames::class)
    ->middleware(['auth'])
    ->name('picks');

Route::get('/upload-games', \App\Livewire\CsvUpload::class)->name('admin.upload-games');


require __DIR__.'/auth.php';
