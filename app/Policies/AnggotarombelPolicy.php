<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Anggotarombel;
use App\Models\User;

class AnggotarombelPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Anggotarombel');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('view Anggotarombel');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Anggotarombel');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('update Anggotarombel');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('delete Anggotarombel');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Anggotarombel');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('restore Anggotarombel');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Anggotarombel');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('replicate Anggotarombel');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Anggotarombel');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Anggotarombel $anggotarombel): bool
    {
        return $user->checkPermissionTo('force-delete Anggotarombel');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Anggotarombel');
    }
}
