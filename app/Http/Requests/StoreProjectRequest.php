<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:100|min:5|string',
            'description' => 'nullable',
            'link' => 'nullable|string',
            'screen' => 'nullable|image',
            'collaborators' => 'max:100|min:2|nullable',
            'used_languages' => 'max:100|min:2|nullable',
            'type_id' => 'nullable|exists:types,id',
            'technologies' => 'nullable|exists:technologies,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Inserire un titolo',
            'title.min' => 'Il titolo è troppo breve',
            'title.max' => 'Il titolo è troppo lungo',
            'link.string' => 'Il link deve essere una stringa valida',
            'link.screen' => 'Inserire un formato immagine valido',
            'collaborators.min' => 'Il campo collaboratori è troppo breve',
            'collaborators.max' => 'Il campo collaboratori è troppo lungo',
            'used_languages.min' => 'Il campo linguaggi e framework è troppo breve',
        ];
    }
}
