<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'brand' => 'string|max:255',
            'model' => 'string|max:255',
            'engine' => 'string|max:255',
            'max_speed' => 'integer|min:120|max:300',
            'year' => 'integer|min:1990|max:2021',
            'number_of_doors' =>'integer|min:2|max:10',
            'is_automatic' => 'boolean'
        ];
    }
}
