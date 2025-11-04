<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Ekstrakurikuler;
use App\Models\User;

class EkstrakurikulerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Ekstrakurikuler');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('view Ekstrakurikuler');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Ekstrakurikuler');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('update Ekstrakurikuler');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('delete Ekstrakurikuler');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Ekstrakurikuler');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('restore Ekstrakurikuler');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Ekstrakurikuler');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('replicate Ekstrakurikuler');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Ekstrakurikuler');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ekstrakurikuler $ekstrakurikuler): bool
    {
        return $user->checkPermissionTo('force-delete Ekstrakurikuler');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Ekstrakurikuler');
    }
}
