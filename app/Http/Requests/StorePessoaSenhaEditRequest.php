<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePessoaSenhaEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Definir regras de validação para o Form Request
        return [
            'senha' => 'required|min:6|confirmed',  
            'senha_confirmation' => 'required|min:6',         
        ];
    }

    /**
     * Customizar mensagens de erro, caso necessário.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'senha.confirmed' => 'A confirmação de senha não corresponde.',
            'senha_confirmation.required' => 'A confirmação de senha é obrigatória.',
            'senha_confirmation.min' => 'A confirmação de senha deve ter pelo menos 6 caracteres.',
        ];
    }
    
}
