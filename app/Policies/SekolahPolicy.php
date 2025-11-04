<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Sekolah;
use App\Models\User;

class SekolahPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Sekolah');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('view Sekolah');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Sekolah');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('update Sekolah');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('delete Sekolah');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Sekolah');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('restore Sekolah');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Sekolah');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('replicate Sekolah');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Sekolah');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sekolah $sekolah): bool
    {
        return $user->checkPermissionTo('force-delete Sekolah');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Sekolah');
    }
}
