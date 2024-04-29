<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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


        $image = request()->isMethod('put') ? 'nullable' : 'required';
        $rules = [
            'image' =>  $image ,
            'category_id' =>  'required' ,
            'company_id' =>  'required' ,
            'price' =>  'required' ,
            'kind' =>  'required' ,
            'promotions' =>  'required' ,
            'configuration' =>  'required' ,
            'emission_code' =>  'required' ,
            'fuel_type' =>  'required' ,
            'damaged' =>  'required' ,
            'engineCapacity' =>  'required' ,
            'suspensionType' =>  'required' ,
            'axelsNumber' =>  'required' ,
            'gearBox' =>  'required' ,
            'mileAge' =>  'required' ,
            'model_year'=>'required',
            'model'=>'required',
            'engine'=>'required',
            'wheelbase'=>'required',
            'cab'=>'required',
            'steering'=>'required',
            'rear_axles'=>'required',
            'frame'=>'required',
            'gcw'=>'required',
            'fuel_tanker'=>'required',
            'tires'=>'required',
            'battery'=>'required',
            'oversize'=>'required',
            'color'=>'required',
            'transmission'=>'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];
        }
        return  $rules;
    }

}
