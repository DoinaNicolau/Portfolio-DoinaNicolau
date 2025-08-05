<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[
   PublicController::class,
    'homepage'
])->name('homepage');

// NUOVA ROTTA: per gestire l'invio del form
Route::post('/contact', [PublicController::class, 'submitContact'])->name('contact.submit');

Route::post('/send-cv', [PublicController::class, 'sendCv'])->name('cv.send');