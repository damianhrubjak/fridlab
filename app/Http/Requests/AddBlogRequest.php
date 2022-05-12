<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBlogRequest extends FormRequest
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
            'title' => 'required|max:191|min:3|unique:blogs,title',
            'text' => 'required|min:3|max:16777215',
            'image' => 'required|mimes:png,jpg,jpeg,gif,tif,bmp,webp'
        ];
    }
}
