<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $befor_year = now()->subYears(1)->addDay(1)->format('Y-m-d');

        return [
            'date_of_birth' => ['required', 'date', "before:$befor_year"],
            'your_name' => ['required', 'string', 'max:255', 'min:5'],
        ];
    }
}
