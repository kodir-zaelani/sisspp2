<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenjangpendidikan;
use App\Models\User;

class JenjangpendidikanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenjangpendidikan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('view Jenjangpendidikan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenjangpendidikan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('update Jenjangpendidikan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('delete Jenjangpendidikan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenjangpendidikan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('restore Jenjangpendidikan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenjangpendidikan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('replicate Jenjangpendidikan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenjangpendidikan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenjangpendidikan $jenjangpendidikan): bool
    {
        return $user->checkPermissionTo('force-delete Jenjangpendidikan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenjangpendidikan');
    }
}
