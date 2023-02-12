<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class mymobileno implements Rule
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
        //
        return ( strlen($value) >= 10 ) && ctype_digit($value) && (substr($value,0,2) == '01');
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Mobile number must be in format 01xxxxxx.';
    }
}
