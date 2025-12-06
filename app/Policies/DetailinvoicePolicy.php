<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Detailinvoice;
use App\Models\User;

class DetailinvoicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Detailinvoice');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('view Detailinvoice');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Detailinvoice');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('update Detailinvoice');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('delete Detailinvoice');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Detailinvoice');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('restore Detailinvoice');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Detailinvoice');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('replicate Detailinvoice');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Detailinvoice');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Detailinvoice $detailinvoice): bool
    {
        return $user->checkPermissionTo('force-delete Detailinvoice');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Detailinvoice');
    }
}
