<?php

namespace App\Users;

use App\Repository;

class UserRepository extends Repository
{
    /**
     * UserRepository constructor.
     *
     * @param \App\Users\User $user
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    /**
     * Retrieve a user by email.
     *
     * @param  string  $email
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function findByEmail($name)
    {
        return $this->model->where('email', $name)->first();
    }
}