<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaqRequest extends FormRequest
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
		//dd($this->faq != null ?$this->faq->id:0);
		return 
		[		
			'questions' => 'required|min:10|max:10000|unique:faqs,questions,'. ($this->faq?$this->faq->id:0) .'^[a-zA-Z00C000ff0-9_ ]+$',
			'answers' => 'required|min:10|max:10000|unique:faqs,answers,'. ($this->faq?$this->faq->id:0) .'^[a-zA-Z00C000ff0-9_ ]+$'
		];	
	}
	public function messages() 
	{
		return 
		[
			'questions.regex' => 'As questões podem conter letras, espaços, números e underscores',
			'answers.regex' => 'As respostas podem conter letras, espaços, números e underscores'
		];
	}
}
