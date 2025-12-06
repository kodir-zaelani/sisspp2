<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Tagihansiswa;
use App\Models\User;

class TagihansiswaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Tagihansiswa');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('view Tagihansiswa');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Tagihansiswa');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('update Tagihansiswa');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('delete Tagihansiswa');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Tagihansiswa');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('restore Tagihansiswa');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Tagihansiswa');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('replicate Tagihansiswa');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Tagihansiswa');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Tagihansiswa $tagihansiswa): bool
    {
        return $user->checkPermissionTo('force-delete Tagihansiswa');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Tagihansiswa');
    }
}
