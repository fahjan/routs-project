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

        $date_of_birth = Carbon::parse($request->date_of_birth);
        return $date_of_birth;
        return now()->sub()->age;
        return $request->date_of_birth;
        // $dob = request('date_of_birth');
        // $age = \Carbon\Carbon::parse($dob)->age;
    

        // return view('date_of_birth_form', ['age' => $age, 'dob' => $dob]);
    }
)->name('calculate_age');