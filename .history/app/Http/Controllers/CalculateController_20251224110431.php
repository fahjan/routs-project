<?php
use Controller;

class CalculateController extends Controller
{
    public function calculateAge(Request $request)
    {
        $your_age = Carbon::parse($request->date_of_birth)->age;

        return view('display_age', ['age' => $your_age]);
    }
}



