<?php

namespace App\Http\Requests;



use Illuminate\Http\Controllers\Auth\
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
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
        'fname' => 'required|alpha_spaces', 
        'lname' =>  'required|alpha_spaces',
        'contact' => 'required|numeric',
        'barangay' => 'required' ,
        'province' => 'required' ,
        'town' => 'required' ,
        'city' => 'required';








            //
        ];
    }
}
