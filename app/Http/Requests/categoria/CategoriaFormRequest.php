<?php

namespace App\Http\Requests\categoria;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaFormRequest extends FormRequest
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

        $rules=[
            'nome'=>[
                'required',
                'string',
                'max:200'
            ],
            'slug'=>[
                'required',
                'string',
                'max:200'
            ],
            'descricao'=>[
                'required'
            ],
            'meta_titulo'=>[
                'required',
                'string',
                'max:200'
            ],
            'meta_descricao'=>[
                'required',
                'string'
            ],
            'meta_keywords'=>[
                'required',
                'string'
            ],
            'navbar_status'=>[
                'required',
                'string',
                'boolean'
            ],
            'estado'=>[
                'required',
                'string',
                'boolean'
            ],
            'imagem'=>[
                'required',
                'mimes:jpeg,jpg.png'
            ]
            ];

        return $rules;
    }
}

