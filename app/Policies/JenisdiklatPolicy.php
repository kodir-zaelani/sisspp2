<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisdiklat;
use App\Models\User;

class JenisdiklatPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisdiklat');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('view Jenisdiklat');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisdiklat');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('update Jenisdiklat');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('delete Jenisdiklat');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisdiklat');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('restore Jenisdiklat');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisdiklat');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('replicate Jenisdiklat');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisdiklat');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisdiklat $jenisdiklat): bool
    {
        return $user->checkPermissionTo('force-delete Jenisdiklat');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisdiklat');
    }
}
