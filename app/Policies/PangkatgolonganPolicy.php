<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Pangkatgolongan;
use App\Models\User;

class PangkatgolonganPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Pangkatgolongan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('view Pangkatgolongan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Pangkatgolongan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('update Pangkatgolongan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('delete Pangkatgolongan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Pangkatgolongan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('restore Pangkatgolongan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Pangkatgolongan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('replicate Pangkatgolongan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Pangkatgolongan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pangkatgolongan $pangkatgolongan): bool
    {
        return $user->checkPermissionTo('force-delete Pangkatgolongan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Pangkatgolongan');
    }
}
