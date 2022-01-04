<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'    => 'required',
            'email'   => 'required|email',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'    => 'Nome é obrigatório',
            'email.required'   => 'Email e obrigatorio',
            'email.email'      => 'Digita um email certo ai',
            'message.required' => 'Mensagem é obrigatória'
        ];
    }
}