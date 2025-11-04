<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Statusanak;
use App\Models\User;

class StatusanakPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Statusanak');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('view Statusanak');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Statusanak');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('update Statusanak');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('delete Statusanak');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Statusanak');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('restore Statusanak');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Statusanak');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('replicate Statusanak');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Statusanak');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Statusanak $statusanak): bool
    {
        return $user->checkPermissionTo('force-delete Statusanak');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Statusanak');
    }
}
