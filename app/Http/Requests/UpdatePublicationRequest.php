<?php

namespace INTEGRATEITM\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePublicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'titulo' => 'required',
            'text' => 'required',
            'categoria' => 'required',
            'imagen_publication' => 'image|nullable|max:19999',
        ];
    }
}
