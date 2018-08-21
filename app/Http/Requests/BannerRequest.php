<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'title' => 'required',
            'url' => 'required',
            'imgUrl' => 'required',
            'desc' => 'required',
        ];
    }

    public function messages()
	{
		return [
			'required' => ':attribute 不能为空.',
		];
	}

	public function attributes()
	{
		return [
			'title' => '标题',
			'url' => '链接地址',
			'imgUrl' => '图片',
			'desc' => '描述',
		];
	}
}
