<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostLocation extends FormRequest
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
            'zip' => 'required',
            'town' => 'required| max: 255',
            'street' => 'required| max: 255 '
        ];
    }
}
