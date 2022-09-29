<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidationRequest extends FormRequest
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
            'news_title'               => 'required',
            'news_description'         => 'required',
            'author_id'                => 'required|numeric',
            'excerpt'                  => 'nullable|max:500',
            'category_id'              => 'nullable',
            'meta_tag'                 => 'nullable',
            'meta_content'             => 'nullable',
            'is_feature'               => 'nullable',
            'feature_image'            => 'nullable|mimes:jpg,png,jpeg,gif|max:2048',
            'status'                   => 'required |numeric',
            'publish_date'             => 'required',
            'flag'                     => 'nullable',
            'category_slug'            => 'required',
        ];
    }
}
