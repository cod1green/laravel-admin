<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('user-update'), Response::HTTP_FORBIDDEN);
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
            'email' => ['required', 'email', 'unique:users,email,' . request()->route('user')->id . ',id'],
            'password' => ['nullable', 'min:8', 'confirmed'],
            // 'roles.*' => ['integer'],
            // 'roles'   => ['required', 'array'],
        ];
    }
}
