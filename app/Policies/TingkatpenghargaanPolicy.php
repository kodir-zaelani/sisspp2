<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Tingkatpenghargaan;
use App\Models\User;

class TingkatpenghargaanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('view Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('update Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('delete Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('restore Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('replicate Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tingkatpenghargaan $tingkatpenghargaan): bool
    {
        return $user->checkPermissionTo('force-delete Tingkatpenghargaan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Tingkatpenghargaan');
    }
}
