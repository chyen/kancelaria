<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

abstract class Service
{
    protected function checkUserExists($userId)
    {
//        return Auth::check();
    }

    protected function checkUserIsLogged()
    {

    }
}



