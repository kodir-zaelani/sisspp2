<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisprestasi;
use App\Models\User;

class JenisprestasiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisprestasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('view Jenisprestasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisprestasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('update Jenisprestasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('delete Jenisprestasi');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisprestasi');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('restore Jenisprestasi');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisprestasi');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('replicate Jenisprestasi');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisprestasi');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisprestasi $jenisprestasi): bool
    {
        return $user->checkPermissionTo('force-delete Jenisprestasi');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisprestasi');
    }
}
