<?php
namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CalculateAgeController extends Controller
{
    public function calculateAge(ValidateFormRequest $request)
    {
        $your_age = Carbon::parse($request->date_of_birth)->age;

        return view('display_age', ['age' => $your_age]);
    }




}



