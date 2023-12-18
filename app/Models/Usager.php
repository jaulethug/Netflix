<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Usager extends Authenticatable
{
    use HasRoles;
    protected $fillable = ['nom', 'email', 'password'];
}

