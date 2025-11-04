<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisbeasiswa;
use App\Models\User;

class JenisbeasiswaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisbeasiswa');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('view Jenisbeasiswa');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisbeasiswa');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('update Jenisbeasiswa');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('delete Jenisbeasiswa');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisbeasiswa');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('restore Jenisbeasiswa');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisbeasiswa');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('replicate Jenisbeasiswa');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisbeasiswa');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisbeasiswa $jenisbeasiswa): bool
    {
        return $user->checkPermissionTo('force-delete Jenisbeasiswa');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisbeasiswa');
    }
}
