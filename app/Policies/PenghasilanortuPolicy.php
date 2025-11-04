<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Penghasilanortu;
use App\Models\User;

class PenghasilanortuPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Penghasilanortu');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('view Penghasilanortu');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Penghasilanortu');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('update Penghasilanortu');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('delete Penghasilanortu');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Penghasilanortu');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('restore Penghasilanortu');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Penghasilanortu');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('replicate Penghasilanortu');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Penghasilanortu');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Penghasilanortu $penghasilanortu): bool
    {
        return $user->checkPermissionTo('force-delete Penghasilanortu');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Penghasilanortu');
    }
}
