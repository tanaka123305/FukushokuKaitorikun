<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */// バリデーションのルールを定義
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'category' => 'required',
            'brand' => 'required',
            'condition' => 'required',
            'kaitori_price' => 'required|numeric|min:0',
            'price' => 'required|numeric|min:0',
            'comment' => 'max:1000',
        ];
    }
    // バリデーションのエラーメッセージを定義
public function messages()
{ 
    return [
        'name.required' => '商品名は必須です。',
        'name.max' => '商品名は255文字以内で入力してください。',
        'category.required' => 'カテゴリーは必須です。',
        'brand.required' => 'ブランドは必須です。',
        'condition.required' => '状態は必須です。',
        'kaitori_price.required' => '買取価格は必須です。',
        'kaitori_price.numeric' => '買取価格は数値で入力してください。',
        'kaitori_price.min' => '買取価格は0円以上で入力してください。',
        'price.required' => '販売価格は必須です。',
        'price.numeric' => '販売価格は数値で入力してください。',
        'price.min' => '販売価格は0円以上で入力してください。',
        'comment.max' => '詳細は1000文字以内で入力してください。',
    ];
}
}
