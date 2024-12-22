<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClasseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'classe_name' => 'required',
            'option_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'classe_name.required' => 'Le champ Classe est obligatoire',
            'option_id.required' => 'Le champ option est obligatoire',
        ];
    }
}