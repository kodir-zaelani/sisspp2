<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenissarana;
use App\Models\User;

class JenissaranaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenissarana');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('view Jenissarana');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenissarana');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('update Jenissarana');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('delete Jenissarana');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenissarana');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('restore Jenissarana');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenissarana');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('replicate Jenissarana');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenissarana');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenissarana $jenissarana): bool
    {
        return $user->checkPermissionTo('force-delete Jenissarana');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenissarana');
    }
}
