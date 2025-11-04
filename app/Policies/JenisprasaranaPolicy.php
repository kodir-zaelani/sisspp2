<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenisprasarana;
use App\Models\User;

class JenisprasaranaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenisprasarana');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('view Jenisprasarana');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenisprasarana');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('update Jenisprasarana');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('delete Jenisprasarana');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenisprasarana');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('restore Jenisprasarana');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenisprasarana');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('replicate Jenisprasarana');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenisprasarana');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenisprasarana $jenisprasarana): bool
    {
        return $user->checkPermissionTo('force-delete Jenisprasarana');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenisprasarana');
    }
}
