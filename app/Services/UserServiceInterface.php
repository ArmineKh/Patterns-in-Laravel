<?php

namespace App\Services;

interface UserServiceInterface
{
    public function getAllUsers();
    public function getUserById($id);
    public function createUser(Array $data);
    public function updateUser($id, Array $data);
    public function deleteUser($id);
}
