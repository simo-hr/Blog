<?php

namespace App\Http\Requests;

use App\Rules\MaxWordCountValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ArticleRequest extends FormRequest
{
    private const TITLE_MAX_WORD_COUNT = 255;
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
            'category_id' => 'required|regex:/^[0-9]+$/i|exists:categories,id',
            'title' => ['required', 'string', new MaxWordCountValidation(self::TITLE_MAX_WORD_COUNT)],
            'content' => 'required|string',
        ];
    }

    /**
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $res = response()->json([
            'status' => 400,
            'message' => $validator->errors(),
            'success' => false,
        ], 400);
        throw new HttpResponseException($res);
    }
}
