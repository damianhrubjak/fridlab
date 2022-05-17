<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSponsorRequest extends FormRequest
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
            'name' => 'required|max:191|min:3',
            'image' => 'required|mimes:png,jpg,jpeg,svg,bmp,webp'
        ];
    }
}
