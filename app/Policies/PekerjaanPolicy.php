<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Pekerjaan;
use App\Models\User;

class PekerjaanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Pekerjaan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('view Pekerjaan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Pekerjaan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('update Pekerjaan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('delete Pekerjaan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Pekerjaan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('restore Pekerjaan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Pekerjaan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('replicate Pekerjaan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Pekerjaan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pekerjaan $pekerjaan): bool
    {
        return $user->checkPermissionTo('force-delete Pekerjaan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Pekerjaan');
    }
}
