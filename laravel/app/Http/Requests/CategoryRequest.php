<?php

namespace App\Http\Requests;

use App\Rules\MaxWordCountValidation;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoryRequest extends FormRequest
{
    private const NAME_MAX_WORD_COUNT = 255;

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
            'parent_id' => 'nullable|regex:/^[0-9]+$/i|exists:categories',
            'name' => ['required', 'string', new MaxWordCountValidation(self::NAME_MAX_WORD_COUNT)]
        ];
    }

    /**
     * @param Validator $validator
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
