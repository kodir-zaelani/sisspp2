<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Mapelkurikulum;
use App\Models\User;

class MapelkurikulumPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Mapelkurikulum');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('view Mapelkurikulum');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Mapelkurikulum');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('update Mapelkurikulum');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('delete Mapelkurikulum');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Mapelkurikulum');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('restore Mapelkurikulum');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Mapelkurikulum');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('replicate Mapelkurikulum');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Mapelkurikulum');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Mapelkurikulum $mapelkurikulum): bool
    {
        return $user->checkPermissionTo('force-delete Mapelkurikulum');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Mapelkurikulum');
    }
}
