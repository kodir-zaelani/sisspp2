<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jeniskeluar;
use App\Models\User;

class JeniskeluarPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jeniskeluar');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('view Jeniskeluar');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jeniskeluar');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('update Jeniskeluar');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('delete Jeniskeluar');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jeniskeluar');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('restore Jeniskeluar');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jeniskeluar');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('replicate Jeniskeluar');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jeniskeluar');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jeniskeluar $jeniskeluar): bool
    {
        return $user->checkPermissionTo('force-delete Jeniskeluar');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jeniskeluar');
    }
}
