<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsFormValidation extends FormRequest
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
            'company_name'     => 'required',
            'position'         => 'required',
            'ads_image'        => 'nullable|mimes:jpg,png,jpeg,gif|max:5048',
            'publish_date'     => 'required',
            'status'           => 'required',
        ];
    }
}
