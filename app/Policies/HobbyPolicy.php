<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Hobby;
use App\Models\User;

class HobbyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Hobby');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('view Hobby');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Hobby');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('update Hobby');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('delete Hobby');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Hobby');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('restore Hobby');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Hobby');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('replicate Hobby');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Hobby');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Hobby $hobby): bool
    {
        return $user->checkPermissionTo('force-delete Hobby');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Hobby');
    }
}
