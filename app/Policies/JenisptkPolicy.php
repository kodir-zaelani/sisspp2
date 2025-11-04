<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisptk;
use App\Models\User;

class JenisptkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisptk');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('view Jenisptk');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisptk');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('update Jenisptk');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('delete Jenisptk');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisptk');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('restore Jenisptk');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisptk');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('replicate Jenisptk');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisptk');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisptk $jenisptk): bool
    {
        return $user->checkPermissionTo('force-delete Jenisptk');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisptk');
    }
}
