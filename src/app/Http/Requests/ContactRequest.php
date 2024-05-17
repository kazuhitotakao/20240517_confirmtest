<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'left-tel' => ['required','max:5'],
            'middle-tel' => ['required','max:5'],
            'right-tel' => ['required','max:5'],
            'address' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required', 'max:120'],
            // 'first_name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255'],
            // 'tel' => ['required', 'numeric', 'digits_between:10,11'],
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => '名を入力してください',
            'last_name.required' => '姓を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'left-tel.required' => '電話番号を入力してください',
            'middle-tel.required' => '電話番号を入力してください',
            'right-tel.required' => '電話番号を入力してください',
            'left-tel.max' => '電話番号は５桁までの数字で入力してください',
            'middle-tel.max' => '電話番号は５桁までの数字で入力してください',
            'right-tel.max' => '電話番号は５桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        ];
    }
}
