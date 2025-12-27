<?php

use App\Http\Controllers\CalculateAgeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::view('date_of_birth', 'date_of_birth_form')->name('date_of_birth_form');

Route::post('calculate_my_age_from_input', [CalculateAgeController::class, 'calculateAge'])->name('calculate_age');