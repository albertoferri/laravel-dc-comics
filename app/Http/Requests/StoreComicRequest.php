<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }

    public function messages(): array{
        return [
            'title.required' => 'Il titolo deve essere inserito',
            'title.max' => "Il titolo deve avere massimo :max caratteri",
            'price.required' => "Il prezzo deve essere inserito",
            'price.max' => "Inserisci un prezzo di massimo :max caratteri",
            'series.required' => "La serie deve essere inserita",
            'series.max' => "La serie deve avere massimo :max caratteri",
            'sale_date.required' => "La data di vendita deve essere inserita",
            'sale_date.date' => "Inserisci una data valida",
            'type.required' => 'Il tipo deve essere inserito',
            'type.max' => "Il tipo deve avere massimo :max caratteri",
            'artists.required' => "Gli artisti devono essere inseriti",
            'writers.required' => "Gli scrittori devono essere inseriti",
        ];
    }
}
