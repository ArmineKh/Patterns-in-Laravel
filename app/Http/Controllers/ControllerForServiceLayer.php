<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Services\UserServiceInterface;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ControllerForServiceLayer extends Controller
{
    use ApiResponse;
    protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return $this->successResponse($users);
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->userService->createUser($request->validated());
        return $this->successResponse($user);
    }

//    Other methods similar to above, using $this->userService
}
