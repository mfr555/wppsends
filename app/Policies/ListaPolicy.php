<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Lista;
use App\Models\User;

class ListaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Por el momento todos los usuarios pueden ver usuarios
     */
    public function view(User $user){
        return true;
    }

    public function edit(User $user){
        return $user->username == 'mfr';
    }

}
