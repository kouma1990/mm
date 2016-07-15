<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MasteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // 誰でも新規登録できる。
        // TODO:
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
            'title' => 'required',
            'price' => 'integer',
            'number' => 'integer',
            'number_open' => 'integer',
        ];
    }
}
