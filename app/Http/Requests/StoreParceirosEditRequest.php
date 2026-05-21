<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParceirosEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome'   => 'required|string|max:250',
            'imagem' => 'required|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.string'   => 'O nome deve ser um texto válido.',
            'nome.max'      => 'O nome não pode ultrapassar 250 caracteres.',
            'imagem.required' => 'O campo imagem é obrigatório.',
            'imagem.image'  => 'O arquivo enviado deve ser uma imagem.',
            'imagem.mimes'  => 'A imagem deve estar em um dos formatos: jpeg, png, jpg, gif ou svg.',
            'imagem.max'    => 'A imagem não pode ultrapassar 2MB.',
        ];
    }
}
