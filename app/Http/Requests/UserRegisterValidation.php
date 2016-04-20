<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRegisterValidation extends Request
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
			'name' => 'required','password'=>'required','gallery'=>'required'
		];
	}

	public function messages()
	{
		return [
				'name.required' => 'ឈ្មោះអ្នកប្រើប្រាស់​ត្រូវតែបញ្ចូល!',
				'password.required' => 'លេខ​សំងាត់​ត្រូវតែបញ្ចូល!',
				'gallery.required' => 'បញ្ចូល​រូប​ភាព​យ៉ាង​ហោច​ណាស់​មួយ!'
		];
	}

}
