<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }
    public function rules()
    {
        return [
            'name' => [
                'string',
            ],
            'price' => [
                'integer',
            ],
            'picture' => [
                'string',
            ],
            'description' => [
                'required', 'string',
            ],
        ];
    }
}
