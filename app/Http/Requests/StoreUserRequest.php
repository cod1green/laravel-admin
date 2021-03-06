<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user-create'), Response::HTTP_FORBIDDEN);
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
            'name' => ['required', 'max:120'],
            'email' => ['required', 'email', 'unique:users,email,id'],
            'password' => ['required', 'min:8', 'confirmed'],
            // 'roles.*.id'  => ['integer', 'exists:roles,id'],
            // 'roles'    => ['required', 'array'],
        ];
    }
}
