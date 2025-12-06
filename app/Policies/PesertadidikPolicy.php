<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Pesertadidik;
use App\Models\User;

class PesertadidikPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Pesertadidik');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('view Pesertadidik');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Pesertadidik');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('update Pesertadidik');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('delete Pesertadidik');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Pesertadidik');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('restore Pesertadidik');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Pesertadidik');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('replicate Pesertadidik');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Pesertadidik');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Pesertadidik $pesertadidik): bool
    {
        return $user->checkPermissionTo('force-delete Pesertadidik');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Pesertadidik');
    }
}
