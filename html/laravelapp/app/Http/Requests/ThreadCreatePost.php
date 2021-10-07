<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'title' => 'required|max:' . $const['TITLE_MAX_LENGTH'],
            'text' => 'required|max:' . $const['TEXT_MAX_LENGTH'],
        ];
    }
}
