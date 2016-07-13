<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class Register extends Request
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
            'email' => 'required|unique|max:60',
            'password' => 'required|confirmed'
        ];
    }
}
