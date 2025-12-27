<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::view('date_of_birth', 'date_of_birth_form')->name('date_of_birth_form');

Route::post(
    'calculate_my_age_from_input',
    function (Request $request) {


        $your_age = Carbon::parse($request->date_of_birth)->age;

        return view('display_age', ['age' => $your_age]);

    }
)->name('calculate_age');

Route::post('calculate_my_age_from_input', )->name('calculate_age');