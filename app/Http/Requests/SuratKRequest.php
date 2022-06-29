<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuratKRequest extends FormRequest
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
            'no_surat' => ['required','string'],
            'perihal' => ['required','string'],
            'alamat' => ['required','string'],
            'tanggal' => ['required','date'],
            'dok' => ['mimes:doc,docx,pdf'],

        ];
    }
}
