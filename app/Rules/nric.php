<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class nric implements Rule, DataAwareRule
{

    protected $data = [];
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
        return ( strlen($value) == 12) &&
                 ctype_digit($value) &&
                 (substr($this->data['nric'],0,6) ==  substr(date('Ymd',strtotime($this->data['dob'])),2,6)
               );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'NRIC must be 12 digit length, without dash, and match with your date of birth';
    }

    /**
     *
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
