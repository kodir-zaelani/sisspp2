<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Statuskepemilikansarpras;
use App\Models\User;

class StatuskepemilikansarprasPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('view Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('update Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('delete Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('restore Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('replicate Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Statuskepemilikansarpras $statuskepemilikansarpras): bool
    {
        return $user->checkPermissionTo('force-delete Statuskepemilikansarpras');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Statuskepemilikansarpras');
    }
}
