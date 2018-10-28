<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_car'=>'required|max:127|unique:cars,name_car',
            'merk_car'=>'required|max:127|unique:cars,merk_car',
            'img_car'=>'required|max:127|unique:cars,img_car',
            'price_car'=>'required|max:127|unique:cars,price_car'
        ];
    }
}
