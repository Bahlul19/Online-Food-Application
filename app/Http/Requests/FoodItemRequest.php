<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class FoodItemRequest extends FormRequest
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
            'foodName'=>'required|min:3|max:60',
            'foodDescription'=>'string',
            'price'=>'required|numeric',
            'foodTag'=>'string',
            'restaurantID'=>'required|integer'
        ];
    }
}
