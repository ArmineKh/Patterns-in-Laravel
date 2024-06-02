<?php

namespace App\Services;

use App\Events\UserRegistered;
use App\Jobs\CreateUserJob;
use App\Repositories\UserRepositoryInterface;
use App\Services\UserServiceInterface;

class UserService implements UserServiceInterface
{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.
        return $this->userRepository->all();
    }

    public function getUserById($id)
    {
        // TODO: Implement getUserById() method.
        return $this->userRepository->find($id);
    }

    public function createUser(array $data)
    {
        // TODO: Implement createUser() method.
//        dispatch(new CreateUserJob($data));

//        or
        $user = $this->userRepository->create($data);
        event((new UserRegistered($user)));

        return $user;
    }

    public function updateUser($id, array $data)
    {
        // TODO: Implement updateUser() method.
        $this->userRepository->update($id, $data);
    }

    public function deleteUser($id)
    {
        // TODO: Implement deleteUser() method.
        $this->userRepository->delete($id);
    }
}
