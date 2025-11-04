<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Sumbergaji;
use App\Models\User;

class SumbergajiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Sumbergaji');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('view Sumbergaji');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Sumbergaji');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('update Sumbergaji');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('delete Sumbergaji');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Sumbergaji');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('restore Sumbergaji');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Sumbergaji');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('replicate Sumbergaji');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Sumbergaji');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Sumbergaji $sumbergaji): bool
    {
        return $user->checkPermissionTo('force-delete Sumbergaji');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Sumbergaji');
    }
}
