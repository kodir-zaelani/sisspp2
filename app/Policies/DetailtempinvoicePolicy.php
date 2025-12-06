<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Detailtempinvoice;
use App\Models\User;

class DetailtempinvoicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Detailtempinvoice');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('view Detailtempinvoice');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Detailtempinvoice');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('update Detailtempinvoice');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('delete Detailtempinvoice');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Detailtempinvoice');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('restore Detailtempinvoice');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Detailtempinvoice');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('replicate Detailtempinvoice');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Detailtempinvoice');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Detailtempinvoice $detailtempinvoice): bool
    {
        return $user->checkPermissionTo('force-delete Detailtempinvoice');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Detailtempinvoice');
    }
}
