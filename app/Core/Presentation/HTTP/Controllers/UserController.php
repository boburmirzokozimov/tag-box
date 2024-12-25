<?php

namespace App\Core\Presentation\HTTP\Controllers;

use App\Common\Infrastructure\Laravel\Controller;
use App\Core\Application\Command\StoreUser\StoreUserCommand;
use App\Core\Presentation\HTTP\Requests\StoreUserRequest;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => 'hello'
        ]);
    }

    public function store(StoreUserRequest $request): JsonResponse
    {
        $command = StoreUserCommand::fromRequest($request->validated());

        return response()->json([
            'data' => 'hello'
        ]);
    }
}
