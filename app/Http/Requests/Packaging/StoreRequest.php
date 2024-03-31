<?php

namespace App\Http\Requests\Packaging;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'     => ['required','string','unique:packagings','max:60'],
            'price'    => ['required','numeric'],
            'status'   => ['required','numeric'],
            'position' => ['required'],
            'image'    => 'nullable|image|mimes:jpeg,png,jpg|max:5098',
        ];
    }
}
