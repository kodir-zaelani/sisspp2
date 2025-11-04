<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenistunjangan;
use App\Models\User;

class JenistunjanganPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenistunjangan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('view Jenistunjangan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenistunjangan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('update Jenistunjangan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('delete Jenistunjangan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenistunjangan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('restore Jenistunjangan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenistunjangan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('replicate Jenistunjangan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenistunjangan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenistunjangan $jenistunjangan): bool
    {
        return $user->checkPermissionTo('force-delete Jenistunjangan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenistunjangan');
    }
}
