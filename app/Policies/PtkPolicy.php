<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Ptk;
use App\Models\User;

class PtkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Ptk');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('view Ptk');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Ptk');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('update Ptk');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('delete Ptk');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Ptk');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('restore Ptk');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Ptk');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('replicate Ptk');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Ptk');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ptk $ptk): bool
    {
        return $user->checkPermissionTo('force-delete Ptk');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Ptk');
    }
}
