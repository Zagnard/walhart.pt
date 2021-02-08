<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFaqRequest extends FormRequest
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
        return 
				[
          //			
					'questions' => 'required\min:10\max:100\unique:faqs,questions|regex:^[a-zA-Z0-9_]+$'
				]; 
				[
				'answerss' => 'required\min:10\max:100\unique:faqs,answers|regex:^[a-zA-Z0-9_]+$'
				];	
				}
				public function messages() 
				{
					return 
					[
						'questions.regex' => 'As questões podem conter letras, espaços, números e underscores'
					];
					[
						'answers.regex' => 'As respostas podem conter letras, espaços, números e underscores'
					];
				}
    }