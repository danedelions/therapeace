<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Illuminate\Validation\Rule;
 


class TherapistRequest extends FormRequest
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
        $rules =  [
            'irmage' => 'nullable',
            'fname' =>  'required', 
            'lname' => 'required', 
            'email' => 'nullable',
            'contact' => 'required',
            'gender' => 'required',
            'streetaddress'  => 'required',
            'city' => 'required',
            'province' => 'required', 
            'barangay' => 'required', 
            'postal_code' => 'required', 
            'therapist' => 'sometimes|required', 
            'license_number' => 'nullable|numeric', 
            'expiry_date' => 'nullable',
            'license_image' => 'nullable', 
            'nbi_image' => 'nullable', 
            'bc_image' => 'nullable', 
            'username' => 'sometimes|required',
            'specialties' => 'sometimes|nullable|array',
            'user_bio' => 'nullable',
            'personal_rate' => 'nullable|numeric|between:0,9999.99'
        ];

        return $rules;
    }
   

}
