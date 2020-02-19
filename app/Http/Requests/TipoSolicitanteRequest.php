<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoSolicitanteRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }


    public function rules()
    {
        return [
            'nome' => [
                'required', 'min:3'
            ]
        ];
    }
}
