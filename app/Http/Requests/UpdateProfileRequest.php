<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $id = auth()->user()->id;

        return [
            'name' => [
                'required',
                'string',
                'max:150'
            ],
            'email' => [
                'required',
                'email:rfc',
                'max:150',
                "unique:users,email,{$id},id"
            ],
            'current_password' => [
                'required_with:password'
            ],
            'password' => [
                'nullable',
                'min:8',
                'confirmed'
            ],
            'photo' => [
                'nullable',
                'image',
                'max:1024',
            ]
        ];
    }
}
