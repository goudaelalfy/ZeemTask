<?php

/**
 * Copyright (c) 2017 Jobs, All Rights Reserved.
 *
 * @author        Gouda Elalfy <goudaelalfy@hotmail.com>
 * @link          http://stackoverflow.com/users/4675055/gouda-elalfy
 * @version       1.0
 */

namespace App;


use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

/**
 * User model class
 *
 * The model class is a model layer (in MVC), through this class I can access the database
 * and make manipulation process on posts table.
 */

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}