<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
            'name' => 'required|max:255|min:4',
            'price' => 'required',
            'quantity' => 'required|gt:0',
            'user_id' => 'required|exists:users,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'name.min' => 'Name cannot be less than 3 characters !',
            'name.max' => 'Name cannot be more than 255 characters !',
            'user_id.required' => 'User_id is required !',
            'quantity.gt' => 'Quantity must be more than 0',
            'user_id.exists' => "User_id not exists!",
        ];
    }
}
