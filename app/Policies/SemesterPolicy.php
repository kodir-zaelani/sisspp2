<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Semester;
use App\Models\User;

class SemesterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Semester');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('view Semester');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Semester');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('update Semester');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('delete Semester');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Semester');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('restore Semester');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Semester');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('replicate Semester');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Semester');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Semester $semester): bool
    {
        return $user->checkPermissionTo('force-delete Semester');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Semester');
    }
}
