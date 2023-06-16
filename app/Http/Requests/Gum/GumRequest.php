<?php

namespace App\Http\Requests\Gum;

use Illuminate\Foundation\Http\FormRequest;

class GumRequest extends FormRequest
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
            'code'=>'required|unique:gums,code,'.$this->id,
            'small'=>'nullable',
            'large'=>'nullable',
            'medium'=>'nullable',
            'x-large'=>'nullable',
            'xx-large'=>'nullable'
        ];
    }
}
