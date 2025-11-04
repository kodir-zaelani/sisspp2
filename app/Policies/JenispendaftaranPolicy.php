<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jenispendaftaran;
use App\Models\User;

class JenispendaftaranPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jenispendaftaran');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('view Jenispendaftaran');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jenispendaftaran');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('update Jenispendaftaran');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('delete Jenispendaftaran');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jenispendaftaran');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('restore Jenispendaftaran');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jenispendaftaran');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('replicate Jenispendaftaran');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jenispendaftaran');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jenispendaftaran $jenispendaftaran): bool
    {
        return $user->checkPermissionTo('force-delete Jenispendaftaran');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jenispendaftaran');
    }
}
