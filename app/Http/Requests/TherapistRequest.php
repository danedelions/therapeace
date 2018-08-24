<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TherapistRequest extends FormRequest
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
        'image' => 'required',
        'fname' =>  'required|alpha_spaces', 
        'lname' => 'required|alpha_spaces', 
        'email' => 'required|alpha_spaces', 
        'contact' => 'required|numeric',
        'barangay' => 'required', 
        'province' => 'required', 
        'town' => 'required', 
        'city' => 'required', 
        'therapist' => 'required', 
        'license' => 'required', 
        'expiry_date' => 'required', 
        'license_image' => 'required', 
        'nbi_image' => 'required', 
        'bp_image' => 'required', 


        ];
    }
}
