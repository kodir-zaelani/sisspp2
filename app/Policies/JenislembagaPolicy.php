<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenislembaga;
use App\Models\User;

class JenislembagaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenislembaga');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('view Jenislembaga');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenislembaga');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('update Jenislembaga');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('delete Jenislembaga');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenislembaga');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('restore Jenislembaga');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenislembaga');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('replicate Jenislembaga');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenislembaga');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenislembaga $jenislembaga): bool
    {
        return $user->checkPermissionTo('force-delete Jenislembaga');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenislembaga');
    }
}
