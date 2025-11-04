<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Provence;
use App\Models\User;

class ProvencePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Provence');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('view Provence');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Provence');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('update Provence');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('delete Provence');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Provence');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('restore Provence');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Provence');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('replicate Provence');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Provence');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Provence $provence): bool
    {
        return $user->checkPermissionTo('force-delete Provence');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Provence');
    }
}
