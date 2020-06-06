<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembersRequest extends FormRequest
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
            'category_id' => 'required|exists:App\Models\Category,id',
            'user_id' => 'exists:App\Models\User,id',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required',
            'phoneNumber' => 'required|numeric|min:14',
            'CIN' => 'required|unique:members',
            'city' => 'required|string',
            'mail' => 'required|email:rfc,dns',
            'address' => 'required|string|max:500',
        ];
    }
}
