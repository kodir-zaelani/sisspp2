<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Lembagapengangkat;
use App\Models\User;

class LembagapengangkatPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Lembagapengangkat');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('view Lembagapengangkat');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Lembagapengangkat');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('update Lembagapengangkat');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('delete Lembagapengangkat');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Lembagapengangkat');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('restore Lembagapengangkat');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Lembagapengangkat');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('replicate Lembagapengangkat');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Lembagapengangkat');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Lembagapengangkat $lembagapengangkat): bool
    {
        return $user->checkPermissionTo('force-delete Lembagapengangkat');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Lembagapengangkat');
    }
}
