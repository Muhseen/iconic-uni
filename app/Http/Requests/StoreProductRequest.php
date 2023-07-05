<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return 1;
        return auth()->user()->can('add-product') || auth()->user()->hasRole('admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'category_id' => 'required|exists:catgeories,id',
            'quantity' => 'numeric|min:1|required',
            'price' => 'numeric| min:1| required',
            'cost_price' => 'numeric|required',
            'description' => 'nullable',
            'colors' => 'nullable',
            'keywords' => 'nullable'
        ];
    }
    public function before(Request $request): array
    {
        return [
            function (Validator $validator) use ($request) {
                if ($request->cost_price <= $request->price) {
                    $validator->errors()->add('Price Error', 'Selling price is less than or equal to Cost Price');
                }
            }
        ];
    }
}
