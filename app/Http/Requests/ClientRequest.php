<?php

namespace App\Http\Requests;

<<<<<<< HEAD


=======
>>>>>>> 48de9d7a0fe8812ce236af581338892d9268df2f
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
<<<<<<< HEAD
        'barangay' => 'required' ,
        'province' => 'required' ,
        'town' => 'required' ,
=======
        'barangay' => 'required',
        'province' => 'required',
        'town' => 'required',
>>>>>>> 48de9d7a0fe8812ce236af581338892d9268df2f
        'city' => 'required',








            //
        ];
    }
}
