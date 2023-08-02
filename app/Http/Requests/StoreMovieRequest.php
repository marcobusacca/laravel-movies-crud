<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'genre' => 'max:100',
            'vote' => 'required|numeric|between:1,10',
            'original_language' => 'required|max:50',
            'length' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome è obbligatorio',
            'name.max' => 'Il nome deve avere una lunghezza massima di :max caratteri',

            'genre.max' => 'max:100',

            'vote.required' => 'Il voto è obbligatorio',
            'vote.between' => 'Il voto deve essere compreso tra :min e :max',

            'original_language.required' => 'Il linguaggio è obbligatorio',
            'original_language.max' => 'Il linguaggio deve avere una lunghezza massima di :max caratteri',
            
            'length.required' => 'La lunghezza deve avere una lunghezza massima di :max caratteri',
        ];
    }
}