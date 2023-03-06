<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\DataAwareRule;
use Illuminate\Contracts\Validation\Rule;

class advance_request_date implements Rule, DataAwareRule
{
    protected $data = [];

    /**
     * Create a new rule instance.
     * 
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
        return ( date('Ymd',strtotime($value)) >= date('Ymd',strtotime(now())) 
                 && date('Ymd',strtotime($value)) > date('Ymd',substr(date('Ymd',strtotime(now())),0,6)."10"));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Date can not be in the past and must be after 10th of the month';
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
