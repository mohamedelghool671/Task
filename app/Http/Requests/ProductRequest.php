<?php

namespace App\Http\Requests;

class ProductRequest extends BaseRequest
{
    public function rules()
    {
        if (request()->method() == 'PUT') {
            return [
                'name' => 'sometimes|required|string|max:255',
                'price' => 'sometimes|required|numeric|min:0',
                'description' => 'sometimes|nullable|string',
                'image_url' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'store_id' => "required|exists:stores,id",
            ];
        }
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            "store_id" => "required|exists:stores,id",
        ];
    }
}
