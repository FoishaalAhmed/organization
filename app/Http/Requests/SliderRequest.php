<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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

        if ($this->getMethod() == 'POST') {

            return [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:200|required',

            ];

        } else {

            return [

                'photo' => 'mimes:jpeg,jpg,png,gif,webp|max:200|nullable',

            ];
        }
    }
}
