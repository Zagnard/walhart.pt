<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreportfoliosRequest extends FormRequest
{
        /**
     *	Determine if the user is authorized to make this request.
     *
     *	@return bool
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
            $rules = [
            "nome_beat" => 'required|min:3|max:20', 
            "descricao" => 'required',
            "tipo" => 'required',
            ];
        
            //  if fileType is audio
            if ($this['beat_audio']) {
                $rules['beat_audio'] = 'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac';
            }
            return $rules;
            
    }
    public function messages()
    {
        return [
            'nome_beat.regex' => '3-20'

        ];
    }
}
