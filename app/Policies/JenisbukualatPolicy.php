<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisbukualat;
use App\Models\User;

class JenisbukualatPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisbukualat');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('view Jenisbukualat');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisbukualat');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('update Jenisbukualat');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('delete Jenisbukualat');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisbukualat');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('restore Jenisbukualat');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisbukualat');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('replicate Jenisbukualat');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisbukualat');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisbukualat $jenisbukualat): bool
    {
        return $user->checkPermissionTo('force-delete Jenisbukualat');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisbukualat');
    }
}
