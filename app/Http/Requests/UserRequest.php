<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $this->validate($request, [
        'name' => 'required|min:3|max:50',
        'email' => 'email',
        'password' => 'min:6|required_with:password_confirmation',
        'password_confirmation' => 'min:6|same:password'
        ]);
            //
        ];
    }
}
