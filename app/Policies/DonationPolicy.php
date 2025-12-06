<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Donation;
use App\Models\User;

class DonationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Donation');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('view Donation');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Donation');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('update Donation');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('delete Donation');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Donation');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('restore Donation');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Donation');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('replicate Donation');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Donation');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Donation $donation): bool
    {
        return $user->checkPermissionTo('force-delete Donation');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Donation');
    }
}
