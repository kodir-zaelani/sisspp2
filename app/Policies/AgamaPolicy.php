<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Agama;
use App\Models\User;

class AgamaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Agama');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('view Agama');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Agama');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('update Agama');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('delete Agama');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Agama');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('restore Agama');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Agama');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('replicate Agama');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Agama');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Agama $agama): bool
    {
        return $user->checkPermissionTo('force-delete Agama');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Agama');
    }
}
