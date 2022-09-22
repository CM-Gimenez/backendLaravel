<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productoRequest extends FormRequest
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
            
            'nombre'=> "required|min:3|max:15",
            'precio'=> "required|numeric|min:1|max:9999",
            'stock'=> "required|numeric|min:1|max:100",
        ];
    }
}
