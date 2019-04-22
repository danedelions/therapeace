<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChecklistRequest extends FormRequest
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
            'booking_id' => 'required',
            'therapist_id' => 'required',
            'client_id' => 'required',
            'chief_complaint' => 'nullable',
            'vital_sign' => 'nullable',
            'bp' => 'nullable',
            'pr' => 'nullable',
            'rr' => 'nullable',
            'assessment' => 'nullable',
            'area_ue' => 'nullable',
            'area_le' => 'nullable',
            'arom' => 'nullable',
            'prom' => 'nullable',
            'massage' => 'nullable',
            'massage_area' => 'nullable',
            'massage_min' => 'nullable',
            'stretching' => 'nullable',
            'stretching_hold' => 'nullable',
            'stretching_sets' => 'nullable',
            'es_tens' => 'nullable',
            'estens_area' => 'nullable',
            'estens_min' => 'nullable',
            'resistance' => 'nullable',
            'resistance_weight' => 'nullable',
            'resistance_motion' => 'nullable',
            'resistance_reps' => 'nullable',
            'resistance_sets' => 'nullable',
            'other' => 'nullable',
            'other_text' => 'nullable'
        ];
    }
}
