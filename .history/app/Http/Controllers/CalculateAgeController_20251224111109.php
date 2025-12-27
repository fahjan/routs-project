<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalculateAgeController extends Controller
{
    public function calculateAge(Request $request)
    {
        $your_age = Carbon::parse($request->date_of_birth)->age;

        return view('display_age', ['age' => $your_age]);
    }


}



