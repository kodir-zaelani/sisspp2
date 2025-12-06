<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jurusansp;
use App\Models\User;

class JurusanspPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jurusansp');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('view Jurusansp');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jurusansp');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('update Jurusansp');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('delete Jurusansp');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jurusansp');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('restore Jurusansp');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jurusansp');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('replicate Jurusansp');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jurusansp');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jurusansp $jurusansp): bool
    {
        return $user->checkPermissionTo('force-delete Jurusansp');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jurusansp');
    }
}
