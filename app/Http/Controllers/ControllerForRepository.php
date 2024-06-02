<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class ControllerForRepository extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = $this->userRepository->find($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = $this->userRepository->create($request->all());
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userRepository->update($id, $request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return response()->json(null, 204);
    }
}
