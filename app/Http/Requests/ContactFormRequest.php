<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => "required|min:3|max:100",
            'subject' => "required|min:3|max:50",
            'email' => "required|min:3|max:100|email",
            'message' => "required|min:10|max:7000",
        ];
    }
}
