<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
// use LdapRecord\Laravel\Auth\LdapAuthenticatable as LdapAuthenticatableTrait;
use LdapRecord\Laravel\Auth\LdapAuthenticatable as LdapAuthenticatableTrait;
use LdapRecord\Laravel\Auth\Authenticatable as LdapAuthenticatableInterface;

class User extends Authenticatable implements LdapAuthenticatableInterface
{
    use LdapAuthenticatableTrait;

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
