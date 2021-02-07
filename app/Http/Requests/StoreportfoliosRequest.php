<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreportfoliosRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome_beat" => 'required|min:3|max:20', 
            "descricao" => 'required',
            "tipo" => 'required'
        ];
    }
    public function messages()
    {
        return [
            'nome_beat.regex' => '3-20'

        ];
    }
}
