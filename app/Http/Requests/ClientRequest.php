<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
     /* Determine if the user is authorized to make this request.
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
        $rules =  [
            'fname' =>  'required', 
            'lname' => 'required', 
            'email' => 'required', 
            'contact' => 'required|numeric',
            'gender' => 'required',
            'username' => 'sometimes|required',
            'city' => 'required',
            'province' => 'required',
            'street' => 'required',
<<<<<<< HEAD
            'brgy' => 'required',
=======
            'brgy' => 'nullable',
>>>>>>> fc0efe799d7768d5397e2d27b0152b4102a4bc6c
            'res_detail' => 'nullable',
            'building' => 'nullable',
            'landmark' => 'nullable',
            'address_remarks' => 'nullable'
        ];
        
        return $rules;
    }
}