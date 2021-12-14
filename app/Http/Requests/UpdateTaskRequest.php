<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UpdateTaskRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }
    public function rules()
    {
        return [
            'name' => [
                'string', 'required',
            ],
            'price' => [
                'integer','required',
            ],
            'picture' => [
                'string', 'required',
            ],
            'description' => [
                'required', 'string',
            ],
        ];
    }
}
