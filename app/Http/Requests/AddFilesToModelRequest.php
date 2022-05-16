<?php

namespace App\Http\Requests;

use App\Rules\ModelFile;
use Illuminate\Foundation\Http\FormRequest;

class AddFilesToModelRequest extends FormRequest
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
            'images.*' => 'required_without:models|mimes:png,jpg,jpeg,gif,tif,bmp,webp',
            'models.*' => ['required_without:images', new ModelFile],
        ];
    }
}
