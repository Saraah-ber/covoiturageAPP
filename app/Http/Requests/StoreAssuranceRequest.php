<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssuranceRequest extends FormRequest
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
            'typeAssurances_id' => 'required|exists:App\Models\typeAssurance,id',
            'police' => 'required|string|unique:assurances',
            'tarif' => 'required|numeric',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ];
    }
}
