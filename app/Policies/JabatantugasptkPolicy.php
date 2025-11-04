<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jabatantugasptk;
use App\Models\User;

class JabatantugasptkPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jabatantugasptk');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('view Jabatantugasptk');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jabatantugasptk');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('update Jabatantugasptk');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('delete Jabatantugasptk');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jabatantugasptk');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('restore Jabatantugasptk');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jabatantugasptk');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('replicate Jabatantugasptk');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jabatantugasptk');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jabatantugasptk $jabatantugasptk): bool
    {
        return $user->checkPermissionTo('force-delete Jabatantugasptk');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jabatantugasptk');
    }
}
