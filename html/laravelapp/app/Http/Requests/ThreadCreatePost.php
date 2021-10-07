<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation;
use Illuminate\Http\Exceptions\HttpResponseException;

class ThreadCreatePost extends FormRequest
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
        $const = config('const');
        return [
            'title' => 'required|string|max:' . $const['TITLE_MAX_LENGTH'],
            'text' => 'required|string|max:' . $const['TEXT_MAX_LENGTH'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $status = 400;
        $res = response()->json([
            'status' => $status,
            'errors' => $validator->errors(),
        ], $status);
        throw new HttpResponseException($res);
    }
}
