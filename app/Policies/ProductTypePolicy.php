<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product types.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ProductTypes  $productTypes
     * @return mixed
     */
    public function before(User $user)
    {
        if ($user->role ==  1) {
            return true;
        }
    }

     public function anyview(User $user)
    {
        //
    }

    public function view(User $user)
    {
        return $user->role == 2;
    }

    /**
     * Determine whether the user can create product types.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->role == 2;
    }

    /**
     * Determine whether the user can update the product types.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ProductTypes  $productTypes
     * @return mixed
     */
    public function update(User $user)
    {
        return $user->role == 2;
    }

    /**
     * Determine whether the user can delete the product types.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ProductTypes  $productTypes
     * @return mixed
     */
    public function delete(User $user)
    {
        return $user->role == 2;
    }

    /**
     * Determine whether the user can restore the product types.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ProductTypes  $productTypes
     * @return mixed
     */
    public function restore(User $user)
    {
        return $user->role == 2;
    }

    /**
     * Determine whether the user can permanently delete the product types.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ProductTypes  $productTypes
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        return $user->role == 2;
    }
}
