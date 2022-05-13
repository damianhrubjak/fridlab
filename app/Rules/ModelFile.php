<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Log;

class ModelFile implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $allowedExtensions = ['3mf', 'stl', 'step'];

        $extension = pathinfo($value->getClientOriginalName(), PATHINFO_EXTENSION);

        return in_array($extension, $allowedExtensions);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Súbor musí byť typu 3MF / STL / STEP';
    }
}
