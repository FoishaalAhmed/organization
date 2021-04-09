<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules = [

            'title'       => 'required|string|max:255',
            'date'        => 'required|date',
            'category_id' => 'required|numeric',
            'writer'      => 'nullable|string|max:255',
            'text'        => 'required|string',
        ];

        if ($this->getMethod() == 'POST') {

            return $rules + [

                'photo'  => 'mimes:jpeg,jpg,png,gif,webp,svg|max:200|required',

            ];
        } else {

            return $rules + [

                'photo'  => 'mimes:jpeg,jpg,png,gif,webp,svg|max:200|nullable',

            ];
        }
    }
}
