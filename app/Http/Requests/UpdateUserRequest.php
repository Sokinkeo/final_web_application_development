<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'email'   => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'password' => [
                'required',
            ],
            'role_id' => [
                'required',
            ],
        ];
    }

    public function authorize()
    {
        return Auth::check();
    }
}
