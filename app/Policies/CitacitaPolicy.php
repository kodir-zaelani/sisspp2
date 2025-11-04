<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Citacita;
use App\Models\User;

class CitacitaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Citacita');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('view Citacita');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Citacita');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('update Citacita');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('delete Citacita');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Citacita');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('restore Citacita');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Citacita');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('replicate Citacita');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Citacita');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Citacita $citacita): bool
    {
        return $user->checkPermissionTo('force-delete Citacita');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Citacita');
    }
}
