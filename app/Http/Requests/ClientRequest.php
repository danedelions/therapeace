<?php

namespace App\Http\Requests;
use Auth;
use Illuminate\Validation\Rule;
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
            'brgy' => 'nullable',
            'res_detail' => 'nullable',
            'building' => 'nullable',
            'landmark' => 'nullable',
            'address_remarks' => 'nullable'
        ];
        
        return $rules;
    }
}