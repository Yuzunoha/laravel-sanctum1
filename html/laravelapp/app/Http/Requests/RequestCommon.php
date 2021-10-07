<?php

namespace App\Http\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;

class RequestCommon
{
    public static function failedValidationCore($errors, $status = 400)
    {
        $res = response()->json([
            'status' => $status,
            'errors' => $errors,
        ], $status);

        throw new HttpResponseException($res);
    }
}
