<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Statuskepegawaian;
use App\Models\User;

class StatuskepegawaianPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Statuskepegawaian');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('view Statuskepegawaian');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Statuskepegawaian');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('update Statuskepegawaian');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('delete Statuskepegawaian');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Statuskepegawaian');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('restore Statuskepegawaian');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Statuskepegawaian');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('replicate Statuskepegawaian');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Statuskepegawaian');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Statuskepegawaian $statuskepegawaian): bool
    {
        return $user->checkPermissionTo('force-delete Statuskepegawaian');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Statuskepegawaian');
    }
}
