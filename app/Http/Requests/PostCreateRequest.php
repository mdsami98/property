<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
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
            'title' =>'required|min:10|max:80',
            'image' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'post_type' => 'required',
            'area' => 'required|integer|min:400',
            'price' => 'required|integer|min:1',
            'bedroom' => 'required|integer|min:1',
            'bathroom' => 'required|integer|min:1',
            'floor' => 'required|integer|min:1',
            'description' => 'required',
            'region' => 'required',
            'region_area' => 'required',
            'address' => 'required',
            'phn_number' => 'required|numeric|regex:/(01)[0-9]{9}/',
        ];
    }
}
