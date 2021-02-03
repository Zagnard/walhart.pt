<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicesRequest extends FormRequest
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
            "nome"=>'required|min:2|max:100|unique:services,nome|regex:/^[A-ZÀ-úa-z\s]+$/','descricao'=>'required'
        ];
    }
    
    public function messages()
    {
        return[
            'nome.regex'=>'O nome só deve conter letras e espaços'
        ];
    }
}
