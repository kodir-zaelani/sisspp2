<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Village;
use App\Models\User;

class VillagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Village');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('view Village');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Village');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('update Village');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('delete Village');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Village');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('restore Village');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Village');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('replicate Village');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Village');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Village $village): bool
    {
        return $user->checkPermissionTo('force-delete Village');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Village');
    }
}
