<?php

namespace App\Policies;

//use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\apartment;



class ApartmentPolicy
{
    //use HandlesAuthorization;


    public function destroy(User $user, apartment $apartment)
    {

        return $user->id === $apartment->user_id;
    }

    public function edit(User $user, apartment $apartment)
    {

        return $user->id === $apartment->user_id;
    }

    public function update(User $user, apartment $apartment)
    {

        return $user->id === $apartment->user_id;
    }
}
