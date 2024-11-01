<?php

namespace App\Http\Requests\Api;

/**
 * Class VerifyCodeRequest
 * @package App\Http\Requests\Api
 */
class VerifyCodeRequest extends BaseAPIRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|exists:users,email',
            'verification_code' => 'required'
        ];
    }
}
