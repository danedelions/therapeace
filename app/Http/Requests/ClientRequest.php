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
        return [    
        'fname' => 'required|alpha_spaces', 
        'lname' =>  'required|alpha_spaces',
        'contact' => 'required|numeric',
        'fname' => 'required|alpha', 
        'lname' =>  'required|alpha',
        'contact' => 'numeric|between:1,20',
        'barangay' => 'required' ,
        'province' => 'required' ,
        'town' => 'required' ,
        'barangay' => 'required',
        'province' => 'required',
        'town' => 'required',
        'city' => 'required',


            //
        ];
    }
}
