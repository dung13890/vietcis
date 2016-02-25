<?php

namespace App\Repositories;

use App\Eloquent\User;
use App\Repositories\Contracts\UserRepository;

class UserRepositoryEloquent extends AbstractRepositoryEloquent implements UserRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
