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
            'title' =>'required|regex:/^[a-zA-Z][a-zA-Z\\s]+$/|min:10|max:40',
            'image' => 'required',
            'category_id' => 'required',
            'area' => 'required',
            'price' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'description' => 'required',
            'address' => 'required',
            'phn_number' => 'required|numeric|regex:/(01)[0-9]{9}/',
        ];
    }
}
