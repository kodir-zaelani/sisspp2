<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Sumberlistrik;
use App\Models\User;

class SumberlistrikPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Sumberlistrik');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('view Sumberlistrik');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Sumberlistrik');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('update Sumberlistrik');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('delete Sumberlistrik');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Sumberlistrik');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('restore Sumberlistrik');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Sumberlistrik');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('replicate Sumberlistrik');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Sumberlistrik');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sumberlistrik $sumberlistrik): bool
    {
        return $user->checkPermissionTo('force-delete Sumberlistrik');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Sumberlistrik');
    }
}
