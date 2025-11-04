<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Alattransportasi;
use App\Models\User;

class AlattransportasiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Alattransportasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('view Alattransportasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Alattransportasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('update Alattransportasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('delete Alattransportasi');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Alattransportasi');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('restore Alattransportasi');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Alattransportasi');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('replicate Alattransportasi');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Alattransportasi');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Alattransportasi $alattransportasi): bool
    {
        return $user->checkPermissionTo('force-delete Alattransportasi');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Alattransportasi');
    }
}
