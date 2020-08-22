<?php


namespace Domain\Interfaces\Repositories;


use Domain\Entities\User;

interface UserRepositoryInterface
{
    public function persist(User $user): void;
}
