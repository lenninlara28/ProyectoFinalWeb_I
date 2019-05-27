<?php

namespace proyectoFinalWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlatosIngredientesFormRequest extends FormRequest
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
            'codPlato' => 'requeried',
            'codIngrediente' => 'requeried',
            'cantidad' => 'requeried'
        ];
    }
}
