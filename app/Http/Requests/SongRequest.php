<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:1|max:30',
            'artist' => 'required|min:1|max:30',
            'album' => 'required|min:1|max:30',
            'description' => 'required|min:5|max:30',
        ];
    }



    public function messages(): array
    {
        return[
            'title.required' => "Compila correttamente il campo",
            'artist.required' => "Compila correttamente il campo",
            'album.required' => "Compila correttamente il campo",
            'description.required' => "Compila correttamente il campo"
        ];
    }
}
