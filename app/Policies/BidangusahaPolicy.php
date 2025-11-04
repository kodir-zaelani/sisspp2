<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Bidangusaha;
use App\Models\User;

class BidangusahaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Bidangusaha');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('view Bidangusaha');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Bidangusaha');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('update Bidangusaha');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('delete Bidangusaha');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Bidangusaha');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('restore Bidangusaha');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Bidangusaha');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('replicate Bidangusaha');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Bidangusaha');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Bidangusaha $bidangusaha): bool
    {
        return $user->checkPermissionTo('force-delete Bidangusaha');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Bidangusaha');
    }
}
