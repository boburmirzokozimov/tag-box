<?php

namespace App\Common\Domain\Exception;

use Exception;
use Illuminate\Http\JsonResponse;

abstract class BaseException extends Exception
{
    public function render(): JsonResponse
    {
        return response()->json([
            "code" => $this->getCode(),
            "message" => $this->getMessage(),
            'success' => false,
            'data' => []
        ]);
    }
}
