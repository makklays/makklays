<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

class FeedbackRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:5000',
        ];
    }

    /*public function messages()
    {
        return [
            'fio.required' => trans('site.required'),
            'email.required'  => 'Необходимо написать статью',
            'email.required'  => 'Необходимо написать статью',
        ];
    }*/
}
