<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Tahunajaran;
use App\Models\User;

class TahunajaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Tahunajaran');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('view Tahunajaran');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Tahunajaran');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('update Tahunajaran');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('delete Tahunajaran');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Tahunajaran');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('restore Tahunajaran');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Tahunajaran');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('replicate Tahunajaran');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Tahunajaran');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tahunajaran $tahunajaran): bool
    {
        return $user->checkPermissionTo('force-delete Tahunajaran');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Tahunajaran');
    }
}
