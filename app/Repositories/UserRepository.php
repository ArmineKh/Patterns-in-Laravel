<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;


class UserRepository implements UserRepositoryInterface
{

    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function all()
    {
        // TODO: Implement all() method.
        return $this->model->all();
    }

    public function find($id)
    {
        // TODO: Implement find() method.

        return $this->model->find($id);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.

        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        // TODO: Implement update() method.
        $user = $this->model->find($id);
        if ($user){
            $user->update($data);
            return $user;
        }
        return null;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $user = $this->model->find($id);
        if ($user){
            return $user->delete($id);
        }
        return false;
    }
}
