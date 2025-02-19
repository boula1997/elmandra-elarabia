<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequestRequest extends FormRequest
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
        $rules= [
            'name'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'=>'required|email',
            'serviceRequest'=>'required',
        ];

        return $rules;
    }

}
