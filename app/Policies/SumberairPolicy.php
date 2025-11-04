<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Sumberair;
use App\Models\User;

class SumberairPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Sumberair');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('view Sumberair');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Sumberair');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('update Sumberair');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('delete Sumberair');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Sumberair');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('restore Sumberair');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Sumberair');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('replicate Sumberair');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Sumberair');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sumberair $sumberair): bool
    {
        return $user->checkPermissionTo('force-delete Sumberair');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Sumberair');
    }
}
