<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
        $image = request()->isMethod('put') ? 'nullable' : 'required';
        $rules = [
            'image' =>  $image ,
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];
            
        }
        return  $rules;
    }

}
