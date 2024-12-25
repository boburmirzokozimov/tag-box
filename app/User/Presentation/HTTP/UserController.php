<?php

namespace App\User\Presentation\HTTP;

use App\Common\Infrastructure\Laravel\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => 'hello'
        ]);
    }
}
