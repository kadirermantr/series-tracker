<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'season' => ['nullable', 'numeric'],
            'episode' => ['nullable', 'numeric'],
            'time' => ['nullable', 'regex:/[0-9][0-9]\:[0-5][0-9]\:[0-5][0-9]/'],
        ];
    }
}
