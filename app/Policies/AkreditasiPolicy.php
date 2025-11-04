<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Akreditasi;
use App\Models\User;

class AkreditasiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Akreditasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('view Akreditasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Akreditasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('update Akreditasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('delete Akreditasi');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Akreditasi');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('restore Akreditasi');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Akreditasi');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('replicate Akreditasi');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Akreditasi');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Akreditasi $akreditasi): bool
    {
        return $user->checkPermissionTo('force-delete Akreditasi');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Akreditasi');
    }
}
