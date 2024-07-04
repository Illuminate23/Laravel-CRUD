<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'category' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'email.required' => 'Поле email является обязательным',
            'category.required' => 'Поле category является обязательным',
            'subject.required' => 'Поле subject  является обязательным',
            'message.required' => 'Поле message является обязательным',
        ];
    }
}
