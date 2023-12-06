<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
 
    public function rules()
    {
        $rules= [
            'name'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'=>'required|email',
            'address'=>'required',
            'status'=>'required',
        ];
          
        return  $rules;
    }

}
