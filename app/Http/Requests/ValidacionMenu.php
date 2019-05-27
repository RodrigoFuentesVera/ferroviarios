<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidarCampoUrl;

class ValidacionMenu extends FormRequest
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
            'id_menu' => 'required|max:4',
            'nombre_menu' => ['required','max:50', new ValidarCampoUrl],
            'url' => 'required|max:100'
        ];
    }

    
}
