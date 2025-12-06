<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Pdlongitudinal;
use App\Models\User;

class PdlongitudinalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Pdlongitudinal');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('view Pdlongitudinal');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Pdlongitudinal');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('update Pdlongitudinal');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('delete Pdlongitudinal');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Pdlongitudinal');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('restore Pdlongitudinal');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Pdlongitudinal');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('replicate Pdlongitudinal');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Pdlongitudinal');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pdlongitudinal $pdlongitudinal): bool
    {
        return $user->checkPermissionTo('force-delete Pdlongitudinal');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Pdlongitudinal');
    }
}
