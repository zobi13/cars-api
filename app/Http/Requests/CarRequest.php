<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'max_speed' => 'required|integer|min:120|max:300',
            'year' => 'required|integer|min:1990|max:2021',
            'number_of_doors' => 'required|integer|min:2|max:10',
            'is_automatic' => 'required|boolean',
        ];
    }
}
