<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisbantuan;
use App\Models\User;

class JenisbantuanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisbantuan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('view Jenisbantuan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisbantuan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('update Jenisbantuan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('delete Jenisbantuan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisbantuan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('restore Jenisbantuan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisbantuan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('replicate Jenisbantuan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisbantuan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisbantuan $jenisbantuan): bool
    {
        return $user->checkPermissionTo('force-delete Jenisbantuan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisbantuan');
    }
}
