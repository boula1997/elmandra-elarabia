<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        //to add or remove input from request in validation class use $this->merge
        //  $this->merge(['user_id' => auth('api')->user()->id]);

        $image = request()->isMethod('put') ? 'nullable|image|max:1000' : 'required|image|max:1000';

        $rules = [
            'image' =>  $image ,
            'owner' =>  'required',
            'phone' =>  'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.address' => ['required']];
        }
        return  $rules;
    }

}
