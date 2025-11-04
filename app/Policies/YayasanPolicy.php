<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Yayasan;
use App\Models\User;

class YayasanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Yayasan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('view Yayasan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Yayasan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('update Yayasan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('delete Yayasan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Yayasan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('restore Yayasan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Yayasan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('replicate Yayasan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Yayasan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Yayasan $yayasan): bool
    {
        return $user->checkPermissionTo('force-delete Yayasan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Yayasan');
    }
}
