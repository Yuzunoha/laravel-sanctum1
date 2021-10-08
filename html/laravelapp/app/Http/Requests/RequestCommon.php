<?php

namespace App\Http\Requests;

use App\Services\UtilService;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestCommon
{
    public static function failedValidationCore($errors, $status = 400)
    {
        UtilService::throwHttpResponseException($errors, $status);
        // throwHttpResponseException
        return;
        $res = response()->json([
            'status' => $status,
            'errors' => $errors,
        ], $status);

        throw new HttpResponseException($res);
    }
}
