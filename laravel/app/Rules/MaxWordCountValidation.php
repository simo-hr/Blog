<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxWordCountValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(private int $wordCount)
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $trim = str_replace(array("\r\n", "\r", "\n"), '', $value);
        $upper = mb_convert_kana($trim, 'RNASKHCV', 'UTF-8');
        $mbLen = mb_strwidth($upper, 'UTF-8');
        return $this->wordCount >= $mbLen;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ":attributeは{$this->wordCount}文字以下で入力してください";
    }
}
