<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Negara;
use App\Models\User;

class NegaraPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Negara');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('view Negara');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Negara');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('update Negara');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('delete Negara');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Negara');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('restore Negara');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Negara');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('replicate Negara');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Negara');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Negara $negara): bool
    {
        return $user->checkPermissionTo('force-delete Negara');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Negara');
    }
}
