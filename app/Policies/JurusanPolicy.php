<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jurusan;
use App\Models\User;

class JurusanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jurusan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('view Jurusan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jurusan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('update Jurusan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('delete Jurusan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jurusan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('restore Jurusan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jurusan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('replicate Jurusan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jurusan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jurusan $jurusan): bool
    {
        return $user->checkPermissionTo('force-delete Jurusan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jurusan');
    }
}
