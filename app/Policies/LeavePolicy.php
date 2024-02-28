<?php

namespace App\Policies;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LeavePolicy
{
    /**
     * Determine whether the users can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the users can view the model.
     */
    public function view(User $user, Leave $leave): bool
    {
        return true;
    }

    /**
     * Determine whether the users can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the users can update the model.
     */
    public function update(User $user, Leave $leave): bool
    {
        return true;
    }

    /**
     * Determine whether the users can delete the model.
     */
    public function delete(User $user, Leave $leave): bool
    {
        return true;
    }

    /**
     * Determine whether the users can restore the model.
     */
    public function restore(User $user, Leave $leave): bool
    {
        return true;
    }

    /**
     * Determine whether the users can permanently delete the model.
     */
    public function forceDelete(User $user, Leave $leave): bool
    {
        return true;
    }
}
