<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
class UserRequest extends FormRequest
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
        $image=request()->isMethod('put')?'nullable':'required';
        // dd(request()->all());
        return [
            'image' => $image,
            'name' => 'required',
            'phone' => 'required|numeric|unique:users,phone',
            'email' => ['required','email',Rule::unique('users', 'email')->ignore($this->id)],
            'password' => 'required_without:_method|same:confirm-password',
        ];
    }

}
