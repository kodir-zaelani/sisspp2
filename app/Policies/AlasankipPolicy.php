<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Alasankip;
use App\Models\User;

class AlasankipPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Alasankip');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('view Alasankip');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Alasankip');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('update Alasankip');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('delete Alasankip');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Alasankip');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('restore Alasankip');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Alasankip');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('replicate Alasankip');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Alasankip');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Alasankip $alasankip): bool
    {
        return $user->checkPermissionTo('force-delete Alasankip');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Alasankip');
    }
}
