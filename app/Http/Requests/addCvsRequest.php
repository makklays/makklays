<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory;

class addCvsRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required',
            'site' => '',
            'post' => 'required',
            'typejob' => 'required',
            'salary' => 'required',
            'currency' => 'required',
            'about' => 'required',

            'has_car' => '',
            'has_a' => '',
            'has_b' => '',
            'has_c' => '',
            'has_d' => '',
            'has_e' => '',
            'has_be' => '',
            'has_ce' => '',
            'has_de' => '',
            'has_tm' => '',
            'has_tb' => ''
        ];
    }
}
