<?php

namespace App\Http\Requests;

use App\Rules\ModelFile;
use Illuminate\Foundation\Http\FormRequest;

class AddModelRequest extends FormRequest
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
            'images.*' => 'required|mimes:png,jpg,jpeg,gif,tif,bmp,webp',
            'models.*' => ['required', new ModelFile],
            'title' => 'required|max:191|min:3|unique:print_models,title',
            'text' => 'required|min:3|max:16777215'
        ];
    }
}
