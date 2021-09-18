<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     *
     *
     * @return bool
     */
    public function authorize()
    {
            return true;
    }

    /**
     * Postのバリデーション
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'body'  => 'required|between:0,500',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください',
            'body.required'  => '投稿内容を入力してください',
            'body.between'  => '500文字以内で入力してください',
        ];
    }
}
