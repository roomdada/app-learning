<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemanderDevisController;

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('testimonials', function () {
    $testimonials = [
        'John Doe' => 'I am very happy with the service.',
        'Djane Doe' => "I'm very satisfied with the service.",
    ];
    return view('testimonials', ['testimonials' => $testimonials]);
})->name('testimonials');

Route::get('devis', [DemanderDevisController::class, 'show'])->name('devis.show');