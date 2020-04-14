<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductsRequest extends FormRequest
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
            'name' => 'required|string|max:150',
            'code' => 'required|alpha_dash|max:150|unique:products,code,' . $this->product->id,
            'category_id' => 'required|integer',
            'subcategory_id' => 'nullable|integer',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric',
            'short_desc' => 'nullable|string|max:1000',
            'long_desc' => 'nullable|string|max:10000',
        ];
    }
}
