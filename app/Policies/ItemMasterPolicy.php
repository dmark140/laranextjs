<?php

namespace App\Policies;

use App\Models\ItemMaster;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ItemMasterPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ItemMaster $itemMaster)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ItemMaster $itemMaster)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ItemMaster $itemMaster)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ItemMaster $itemMaster)
    {
        //
        return Response::allow();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ItemMaster $itemMaster)
    {
        //
        return Response::allow();
    }
}
