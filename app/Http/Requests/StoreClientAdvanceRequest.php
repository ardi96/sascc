<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\advance_request_date;

class StoreClientAdvanceRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'requested_date' => ['date',new advance_request_date],
            'duration' => ["numeric","min:12"],
            'advance_amount' =>["numeric","min:0"]
        ];
    }

}
