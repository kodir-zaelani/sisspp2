<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Jeniskesejahteraan;
use App\Models\User;

class JeniskesejahteraanPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('view Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('update Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('delete Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('restore Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('replicate Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Jeniskesejahteraan $jeniskesejahteraan): bool
    {
        return $user->checkPermissionTo('force-delete Jeniskesejahteraan');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Jeniskesejahteraan');
    }
}
