<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehiculeRequest extends FormRequest
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
            'assurance_id' => 'required|exists:App\Models\Assurance,id',
            'brand' => 'required|string',
            'type' => 'required|string',
            'matricule' => 'required|string',
            'modele' => 'required|string',
            'nb_places' => 'required|numeric',
        ];
    }
}
