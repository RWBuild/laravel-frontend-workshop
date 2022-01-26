<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class StoreFavoriteRequest extends FormRequest
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
            'person_id' => 'required|exists:people,id',
            'name' => 'required|string',
            'type' => 'string',
            'description' => 'nullable|string'
        ];
    }
}
