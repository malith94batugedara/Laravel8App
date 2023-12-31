<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        $rules = [
            'name'=>[
                 'required',
                 'max:200'
             ],
             'slug'=>[
                'required',
                'max:200'
             ],
             'description'=>[
                'required'
             ],
             'image'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
             ],
             'meta_title'=>[
                'required'
             ],
            'meta_description'=>[
                'required'
             ],
            'meta_keyword'=>[
                'required'
             ],
             'navbar_status'=>[
                'nullable'
             ],
            'status'=>[
                'nullable'
             ],
            ];
        return $rules;
    }
}