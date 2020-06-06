<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrajetRequest extends FormRequest
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
            'type_id' => 'required|exists:App\Models\Type,id',
            'date_départ' => 'required|string',
            'date_arrivé' => 'required|string',
            'Temps_pause' => 'required|string',
            'Lieu_départ' => 'required|string',
            'Lieu_arrivé' => 'required|string',
        ];
    }
}
