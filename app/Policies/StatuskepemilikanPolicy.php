<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Statuskepemilikan;
use App\Models\User;

class StatuskepemilikanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Statuskepemilikan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('view Statuskepemilikan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Statuskepemilikan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('update Statuskepemilikan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('delete Statuskepemilikan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Statuskepemilikan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('restore Statuskepemilikan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Statuskepemilikan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('replicate Statuskepemilikan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Statuskepemilikan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Statuskepemilikan $statuskepemilikan): bool
    {
        return $user->checkPermissionTo('force-delete Statuskepemilikan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Statuskepemilikan');
    }
}
