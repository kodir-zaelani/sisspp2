<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Waktupenyelenggaraan;
use App\Models\User;

class WaktupenyelenggaraanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('view Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('update Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('delete Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('restore Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('replicate Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Waktupenyelenggaraan $waktupenyelenggaraan): bool
    {
        return $user->checkPermissionTo('force-delete Waktupenyelenggaraan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Waktupenyelenggaraan');
    }
}
