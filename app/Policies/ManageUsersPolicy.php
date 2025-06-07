<?php

namespace App\Policies;

use App\Models\User;

class ManageUsersPolicy
{
    /**
     * Create a new policy instance.
     */
    public function ManageUsers(User $user)
    {
        return $user->hasRole('admin');        
    }
}
