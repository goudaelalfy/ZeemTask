<?php

/**
 * Copyright (c) 2017 Jobs, All Rights Reserved.
 *
 * @author        Gouda Elalfy <goudaelalfy@hotmail.com>
 * @link          http://stackoverflow.com/users/4675055/gouda-elalfy
 * @version       1.0
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * ModelHasPermission model class
 *
 * The model class is a model layer (in MVC), through this class I can access the database
 * and make manipulation process on posts table.
 */
class ModelHasPermission extends Model {

    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'model_has_permissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['permission_id', 'model_type', 'model_id'];

}
