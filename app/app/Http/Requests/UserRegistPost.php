<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
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

    public function messages()
    {
        return [
            'nickname.required'         => '入力してください',
            'nickname.max'              => '最大文字数は20文字です',
            'email.required'            => '入力してください',
            'email.email'               => 'メールアドレスの形式が正しくありません',
            'email.max'                 => '最大文字数は255文字です',
            'email.unique'              => 'すでに利用されています',
            'password.required'         => '入力してください',
            'password.confirmed'        => 'パスワードが一致していません',
            'password.min'              => '８文字以上で入力してください',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname'  => 'required|string|max:20',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|confirmed|min:8',
        ];
    }
}
