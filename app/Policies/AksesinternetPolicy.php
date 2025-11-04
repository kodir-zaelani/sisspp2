<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Aksesinternet;
use App\Models\User;

class AksesinternetPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Aksesinternet');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('view Aksesinternet');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Aksesinternet');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('update Aksesinternet');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('delete Aksesinternet');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Aksesinternet');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('restore Aksesinternet');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Aksesinternet');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('replicate Aksesinternet');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Aksesinternet');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Aksesinternet $aksesinternet): bool
    {
        return $user->checkPermissionTo('force-delete Aksesinternet');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Aksesinternet');
    }
}
