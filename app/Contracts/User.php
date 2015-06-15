<?php

namespace Codecasts\Contracts;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

interface User extends AuthenticatableContract, CanResetPasswordContract
{

}
