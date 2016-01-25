<?php

namespace App\Repositories;
use App\User;
use App\apartment;

class ApartmentRepository
{

    public function forUser(User $user)
    {
        return apartment::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function forAll()
    {
        return apartment::all();
    }
}