<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jabatanfungsional;
use App\Models\User;

class JabatanfungsionalPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jabatanfungsional');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('view Jabatanfungsional');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jabatanfungsional');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('update Jabatanfungsional');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('delete Jabatanfungsional');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jabatanfungsional');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('restore Jabatanfungsional');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jabatanfungsional');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('replicate Jabatanfungsional');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jabatanfungsional');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jabatanfungsional $jabatanfungsional): bool
    {
        return $user->checkPermissionTo('force-delete Jabatanfungsional');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jabatanfungsional');
    }
}
