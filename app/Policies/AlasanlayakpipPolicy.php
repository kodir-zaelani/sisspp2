<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Alasanlayakpip;
use App\Models\User;

class AlasanlayakpipPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Alasanlayakpip');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('view Alasanlayakpip');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Alasanlayakpip');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('update Alasanlayakpip');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('delete Alasanlayakpip');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Alasanlayakpip');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('restore Alasanlayakpip');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Alasanlayakpip');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('replicate Alasanlayakpip');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Alasanlayakpip');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Alasanlayakpip $alasanlayakpip): bool
    {
        return $user->checkPermissionTo('force-delete Alasanlayakpip');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Alasanlayakpip');
    }
}
