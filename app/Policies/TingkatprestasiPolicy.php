<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Tingkatprestasi;
use App\Models\User;

class TingkatprestasiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Tingkatprestasi');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('view Tingkatprestasi');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Tingkatprestasi');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('update Tingkatprestasi');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('delete Tingkatprestasi');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Tingkatprestasi');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('restore Tingkatprestasi');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Tingkatprestasi');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('replicate Tingkatprestasi');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Tingkatprestasi');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tingkatprestasi $tingkatprestasi): bool
    {
        return $user->checkPermissionTo('force-delete Tingkatprestasi');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Tingkatprestasi');
    }
}
