<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Gelarakademik;
use App\Models\User;

class GelarakademikPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Gelarakademik');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('view Gelarakademik');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Gelarakademik');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('update Gelarakademik');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('delete Gelarakademik');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Gelarakademik');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('restore Gelarakademik');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Gelarakademik');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('replicate Gelarakademik');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Gelarakademik');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Gelarakademik $gelarakademik): bool
    {
        return $user->checkPermissionTo('force-delete Gelarakademik');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Gelarakademik');
    }
}
