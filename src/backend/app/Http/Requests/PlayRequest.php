<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Set this to true if you want to authorize the validation
        // The default is false
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
            'meditation_id' => 'required',
            'duration' => 'required'
        ];
    }
}
