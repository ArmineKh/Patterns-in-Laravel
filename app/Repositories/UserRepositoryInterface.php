<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(Array $data);
    public function update($id, Array $data);
    public function delete($id);
}
